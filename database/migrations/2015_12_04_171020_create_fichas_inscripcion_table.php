<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichasInscripcionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas_inscripcion', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descripcion')->nullable();
            $table->string('pdf',255)->nullable();
            $table->integer('prioridad');

            $table->integer('usuario_id')->unsigned();
            $table->integer('sede_id')->nullable()->unsigned();
            $table->integer('especialidad_id')->nullable()->unsigned();
            $table->integer('tutor_id')->nullable()->unsigned();
            $table->integer('oferta_id')->nullable()->unsigned();
            $table->integer('estado_ficha_inscripcion_id')->unsigned();
            $table->integer('tipo_electivo_id')->unsigned();
            $table->integer('bloque_id')->nullable()->unsigned();
            $table->integer('actividad_extracurricular_id')->unsigned();

            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('sede_id')->references('id')->on('sedes')->onDelete('cascade');
            $table->foreign('especialidad_id')->references('id')->on('especialidades')->onDelete('cascade');
            $table->foreign('tutor_id')->references('id')->on('tutores')->onDelete('cascade');
            $table->foreign('oferta_id')->references('id')->on('ofertas')->onDelete('cascade');
            $table->foreign('estado_ficha_inscripcion_id')->references('id')->on('estado_fichas_inscripcion')->onDelete('cascade');
            $table->foreign('tipo_electivo_id')->references('id')->on('tipo_electivos')->onDelete('cascade');
            $table->foreign('bloque_id')->references('id')->on('bloques')->onDelete('cascade');
            $table->foreign('actividad_extracurricular_id')->references('id')->on('actividades_extracurriculares')->onDelete('cascade');

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
        Schema::drop('fichas_inscripcion');
    }
}
