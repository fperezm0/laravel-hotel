<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',45);
            $table->date('fechaReserva');
            $table->double('subtotal', 9, 2);
            $table->double('iva', 9, 2);
            $table->double('total', 9, 2);
            $table->string('descripcion',45);
            $table->integer('status');
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('u_servicio_id');
            $table->unsignedBigInteger('reservacion_id');
            $table->unsignedBigInteger('tipo_de_pago_id');
            $table->foreign('u_servicio_id')->references('id')->on('usuario_servicio');
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('reservacion_id')->references('id')->on('reservacion');
            $table->foreign('tipo_de_pago_id')->references('id')->on('tipos_de_pago');
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
        Schema::dropIfExists('cargos');
    }
}
