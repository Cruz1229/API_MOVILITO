<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImagenToInventarionuevosTable extends Migration
{
    public function up()
    {
        Schema::table('inventarioNuevos', function (Blueprint $table) {
            $table->longText('imagen')->nullable()->after('cantidad');
        });
    }

    public function down()
    {
        Schema::table('inventarioNuevos', function (Blueprint $table) {
            $table->dropColumn('imagen');
        });
    }
}
