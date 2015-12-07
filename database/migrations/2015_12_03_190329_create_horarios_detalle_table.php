<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios_detalle', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('horario_id')->unsigned();
            $table->integer('tutor_id')->unsigned();
            $table->integer('especialidad_id')->unsigned();
            $table->integer('mes');
            $table->integer('dia');
            $table->time('hora_inicio');
            $table->time('hora_fin');

            $table->foreign('horario_id')->references('id')->on('horarios')->onDelete('cascade');
            $table->foreign('tutor_id')->references('tutor_id')->on('horarios')->onDelete('cascade');
            $table->foreign('especialidad_id')->references('especialidad_id')->on('horarios')->onDelete('cascade');

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
        Schema::drop('horarios_detalle');
    }
}
