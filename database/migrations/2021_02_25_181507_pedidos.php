<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pedidos', function (Blueprint $table) {
            $table->integer('idCliente');
            $table->string('nombreCliente', 25);
            $table->date('fechaPedido');
            $table->date('fechaEntrega');
            $table->string('nombreVendedor', 50);
            $table->string('moneda', 25);
            $table->double('totalPedido', 8, 2);
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pedidos');
    }
}
