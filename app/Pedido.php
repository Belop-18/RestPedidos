<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';

    public $timestamps = false;

    protected $fillable = [
        'idCliente', 
        'nombreCliente', 
        'fechaPedido', 
        'fechaEntrega',
        'nombreVendedor', 
        'moneda', 
        'totalPedido'
    ];

    protected $guarded = [

    ];
}
