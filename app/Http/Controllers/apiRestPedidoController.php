<?php

namespace App\Http\Controllers;

use App\detallePedido;
use App\Http\Requests\PedidoFormRequest;
use App\Pedido;
use Illuminate\Http\Request;

class apiRestPedidoController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PedidoFormRequest $request)
    {
        try {
            DB::beginTransaction();

            $pedido = New Pedido();
            $pedido->idCliente = $request->idCliente;
            $pedido->nombreCliente = $request->nombreCliente;
            $pedido->fechaPedido = $request->fechaPedido;
            $pedido->fechaEntrega = $request->fechaEntrega;
            $pedido->nombreVendedor = $request->nombreVendedor;
            $pedido->moneda = $request->moneda;
            $pedido->totalPedido = $request->totalPedido;
            $pedido->save();

            $idArticulo = $request->get('idArticulo');
            $descripcion = $request->get('descripcion');
            $cantidad = $request->get('cantidad');
            $precioUnitario = $request->get('precioUnitario');
            $totalDetallePedido = $request->get('totalDetallePedido');

            $cont = 0;
            while ($cont < count($idArticulo)) {
                $detPedido = new detallePedido();
                $detPedido->idArticulo = $idArticulo[$cont];
                $detPedido->descripcion = $descripcion[$cont];
                $detPedido->cantidad = $cantidad[$cont];
                $detPedido->precioUnitario = $precioUnitario[$cont];
                $detPedido->totalDetallePedido = $totalDetallePedido[$cont];
                $detPedido->save();
                $cont = $cont + 1;
            }

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
        return Response::json($pedido);
    }
}
