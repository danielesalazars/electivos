<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('fecha_inicio');
            $table->datetime('fecha_fin');
            $table->integer('tutor_id')->unsigned();
            $table->integer('especialidad_id')->unsigned();
            
            $table->foreign('tutor_id')->references('tutor_id')->on('especialidades_tutores')->onDelete('cascade');
            $table->foreign('especialidad_id')->references('especialidad_id')->on('especialidades_tutores')->onDelete('cascade');
            
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
        Schema::drop('horarios');
    }
}
