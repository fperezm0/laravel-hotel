<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitacion', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',45);
            $table->integer('numero_de_habitacion');
            $table->string('descripcion',90);
            $table->integer('status');
            $table->unsignedBigInteger('tipo_dehabitacion_id');
            $table->foreign('tipo_dehabitacion_id')->references('id')->on('tipo_dehabitacion');
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
        Schema::dropIfExists('habitacion');
    }
}
