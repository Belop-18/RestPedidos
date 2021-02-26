<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PedidoFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'idCliente' => 'required|integer', 
            'nombreCliente' => 'required|max:25', 
            'fechaPedido' => 'required|date|date_format:Y-m-d|after:yesterday', 
            'fechaEntrega' => 'required|date|date_format:Y-m-d|after:yesterday', 
            'nombreVendedor' => 'required|max:50', 
            'moneda' => 'required|max:25', 
            'totalPedido' => 'required', 

            'idArticulo' => 'required|integer', 
            'descripcion' => 'required|max:50',
            'cantidad' => 'required|integer', 
            'precioUnitario' => 'required', 
            'totalDetallePedido' => 'required'
        ];
    }

    /**
    * Get custom attributes for validator errors.
    *
    * @return array
    */
    public function attributes()
    {
        return [
            'idCliente' => 'id de cliente', 
            'nombreCliente' => 'nombre de cliente', 
            'fechaPedido' => 'fecha de pedido', 
            'fechaEntrega' => 'fecha de entrega', 
            'nombreVendedor' => 'nombre de vendedor', 
            'moneda' => 'moneda', 
            'totalPedido' => 'total de pedido', 

            'idArticulo' => 'id de articulo', 
            'descripcion' => 'descripcion de articulo', 
            'cantidad' => 'cantidad', 
            'precioUnitario' => 'precio unitario', 
            'totalDetallePedido' => 'total del detalle pedido'
        ];
    }
}
