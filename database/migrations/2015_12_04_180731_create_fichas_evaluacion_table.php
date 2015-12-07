<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichasEvaluacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas_evaluacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('calificacion')->nullable();
            $table->integer('credito')->nullable();
            $table->text('comentario_tutor')->nullable();
            $table->text('comentario_alumno')->nullable();
            $table->integer('numero_inasistencia')->nullable();
            $table->integer('numero_tardanza')->nullable();

            $table->integer('ficha_evaluacion_pdf_id')->unsigned();
            $table->integer('tipo_ficha_evaluacion_id')->nullable()->unsigned();
            $table->integer('categoria_evaluacion_id')->nullable()->unsigned();

            $table->foreign('ficha_evaluacion_pdf_id')->references('id')->on('fichas_evaluacion_pdf')->onDelete('cascade');
            $table->foreign('tipo_ficha_evaluacion_id')->references('id')->on('tipos_fichas_evaluaciones')->onDelete('cascade');
            $table->foreign('categoria_evaluacion_id')->references('id')->on('categorias_evaluaciones')->onDelete('cascade');

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
        Schema::drop('fichas_evaluacion');
    }
}
