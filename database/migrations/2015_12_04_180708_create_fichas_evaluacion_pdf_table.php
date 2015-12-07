<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichasEvaluacionPdfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas_evaluacion_pdf', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pdf',255);
            $table->integer('ficha_inscripcion_id')->unsigned();
            $table->integer('estado_ficha_evaluacion_id')->unsigned();

            $table->foreign('ficha_inscripcion_id')->references('id')->on('fichas_inscripcion')->onDelete('cascade');
            $table->foreign('estado_ficha_evaluacion_id')->references('id')->on('estado_fichas_evaluaciones')->onDelete('cascade');
           
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
        Schema::drop('fichas_evaluacion_pdf');
    }
}
