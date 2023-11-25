<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarioNuevosTable extends Migration
{
    public function up()
    {
        Schema::create('inventarioNuevos', function (Blueprint $table) {
            $table->id('idNuevo');
            $table->string('marca');
            $table->string('modelo');
            $table->string('color');
            $table->integer('cantidad');
            $table->string('estado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inventarioNuevos');
    }
}
