<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservacion', function (Blueprint $table) {
            $table->id();
            $table->date('fechaReserva');
            $table->date('fechaLlegada');
            $table->date('fechaSalida');
            $table->double('subtotal', 9, 2);
            $table->double('iva', 9, 2);
            $table->double('total', 9, 2);
            $table->integer('estado_confirmacion');
            $table->integer('status');
            $table->unsignedBigInteger('cliente_id');
           $table->foreign('cliente_id')->references('id')->on('users');
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
        Schema::dropIfExists('reservacion');
    }
}
