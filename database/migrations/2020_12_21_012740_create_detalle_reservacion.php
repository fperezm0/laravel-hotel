<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleReservacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_reservacion', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            $table->date('fecha');
            $table->unsignedBigInteger('habitacion_id');
            $table->unsignedBigInteger('reservacion_id');
            $table->foreign('habitacion_id')->references('id')->on('habitacion');
            $table->foreign('reservacion_id')->references('id')->on('reservacion');
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
        Schema::dropIfExists('detalle_reservacion');
    }
}
