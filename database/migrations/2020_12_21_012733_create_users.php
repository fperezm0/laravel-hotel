<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username',45);
            $table->string('password',45);
            $table->string('nombre',45);
            $table->string('apellido',45);
            $table->string('direccion',80);
            $table->string('telefono',80);
            $table->date('fechaNac');
            $table->string('codigo_postal',80);
            $table->string('email',45);
            $table->integer('status');
            $table->unsignedBigInteger('paises_id');
            $table->unsignedBigInteger('estados_id');
            $table->unsignedBigInteger('municipios_id');
            $table->unsignedBigInteger('tipos_de_usuario_id');
            $table->foreign('paises_id')->references('id')->on('paises');
            $table->foreign('estados_id')->references('id')->on('estados');
            $table->foreign('municipios_id')->references('id')->on('municipios');
            $table->foreign('tipos_de_usuario_id')->references('id')->on('tipos_de_usuario');
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
        Schema::dropIfExists('users');
    }
}
