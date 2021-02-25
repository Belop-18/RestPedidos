<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detallePedido extends Model
{
    protected $table = 'detallepedidos';

    public $timestamps = false;

    protected $fillable = [
        'idArticulo', 
        'descripcion', 
        'cantidad', 
        'precioUnitario',
        'totalDetallePedido'
    ];

    protected $guarded = [

    ];
}
