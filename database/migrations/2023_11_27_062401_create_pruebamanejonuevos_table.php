<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePruebamanejonuevosTable extends Migration
{
    public function up()
    {
        Schema::create('pruebamanejonuevos', function (Blueprint $table) {
            $table->id('idPruebaManejoNuevo');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('correo');
            $table->string('telefono');
            $table->string('anio');
            $table->string('marca');
            $table->string('modelo');
            $table->string('fecha');
            $table->string('hora');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pruebamanejonuevos');
    }
}
