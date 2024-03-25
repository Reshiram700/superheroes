<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToSuperheroesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('superheroes', function (Blueprint $table) {
            $table->string('nombre_verdadero');
            $table->string('nombre_superheroe');
            $table->string('foto_superheroe')->nullable();
            $table->text('informacion_adicional')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('superheroes', function (Blueprint $table) {
            $table->dropColumn('nombre_verdadero');
            $table->dropColumn('nombre_superheroe');
            $table->dropColumn('foto_superheroe');
            $table->dropColumn('informacion_adicional');
        });
    }
}
