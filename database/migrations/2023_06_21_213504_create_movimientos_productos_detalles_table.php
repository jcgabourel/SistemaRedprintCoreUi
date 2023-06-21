<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimientosProductosDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientos_productos_detalles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('producto_id');
            $table->foreignId('tipos_movimiento_id');
            $table->foreignId('movimientos_producto_id');
            //$table->foreignId('movimientos_producto_id');
            $table->integer('cantidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimientos_productos_detalles');
    }
}
