<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAnioToInventarionuevosTable extends Migration
{
    public function up()
    {
        Schema::table('inventarioNuevos', function (Blueprint $table) {
            $table->integer('anio')->nullable()->after('modelo');
        });
    }

    public function down()
    {
        Schema::table('inventarioNuevos', function (Blueprint $table) {
            $table->dropColumn('anio');
        });
    }
}
