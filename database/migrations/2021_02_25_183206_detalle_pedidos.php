<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetallePedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallePedidos', function (Blueprint $table) {
            $table->integer('idArticulo');
            $table->string('descripcion', 50);
            $table->integer('cantidad');
            $table->double('precioUnitario', 8, 2);
            $table->double('totalDetallePedido', 8, 2);
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
        Schema::dropIfExists('detallePedidos');
    }
}
