<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantillasEleccionDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plantillas_eleccion_detalle', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('plantilla_eleccion_id')->unsigned();
            $table->integer('rotacion_id')->unsigned();
            $table->integer('oferta_id')->unsigned();
            $table->foreign('plantilla_eleccion_id')->references('id')->on('plantillas_eleccion')->onDelete('cascade');
            $table->foreign('rotacion_id')->references('id')->on('rotaciones')->onDelete('cascade');
            $table->foreign('oferta_id')->references('id')->on('ofertas')->onDelete('cascade');
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
        Schema::drop('plantillas_eleccion_detalle');
    }
}
