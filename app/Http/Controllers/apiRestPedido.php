<?php

namespace App\Http\Controllers;

use App\detallePedido;
use App\Pedido;
use Illuminate\Http\Request;

class apiRestPedido extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pedido = new Pedido();
        $pedido -> idCliente = $request -> idCliente;
        $pedido -> nombreCliente = $request -> nombreCliente;
        $pedido -> fechaPedido = $request -> fechaPedido;
        $pedido -> fechaEntrega = $request -> fechaEntrega;
        $pedido -> nombreVendedor = $request -> nombreVendedor;
        $pedido -> moneda = $request -> moneda;
        $pedido -> totalPedido = $request -> totalPedido;
        $pedido -> save();

        $detPedido = new detallePedido();
        $detPedido -> idArticulo = $request -> idArticulo;
        $detPedido -> descripcion = $request -> descripcion;
        $detPedido -> cantidad = $request -> cantidad;
        $detPedido -> precioUnitario = $request -> precioUnitario;
        $detPedido -> totalDetallePedido = $request -> totalDetallePedido;
        $detPedido -> save();
    }

}
