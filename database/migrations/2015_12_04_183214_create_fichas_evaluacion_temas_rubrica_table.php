<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichasEvaluacionTemasRubricaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas_evaluacion_temas_rubrica', function (Blueprint $table) {
            $table->integer('ficha_evaluacion_id')->unsigned();
            $table->integer('tema_rubrica_id')->unsigned();
            $table->integer('alternativa_rubrica_id')->unsigned();

            $table->foreign('ficha_evaluacion_id')->references('id')->on('fichas_evaluacion')->onDelete('cascade');
            $table->foreign('tema_rubrica_id')->references('id')->on('temas_rubrica')->onDelete('cascade');
            $table->foreign('alternativa_rubrica_id')->references('id')->on('alternativas_rubrica')->onDelete('cascade');

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
        Schema::drop('fichas_evaluacion_temas_rubrica');
    }
}
