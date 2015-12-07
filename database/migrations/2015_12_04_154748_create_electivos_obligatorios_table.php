<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElectivosObligatoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electivos_obligatorios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('plantilla_eleccion_id')->unsigned();
            $table->integer('rotacion_id')->unsigned();
            $table->foreign('plantilla_eleccion_id')->references('id')->on('plantillas_eleccion')->onDelete('cascade');
            $table->foreign('rotacion_id')->references('id')->on('rotaciones')->onDelete('cascade');
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
        Schema::drop('electivos_obligatorios');
    }
}
