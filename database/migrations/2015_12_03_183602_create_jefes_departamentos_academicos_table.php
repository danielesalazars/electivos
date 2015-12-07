<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJefesDepartamentosAcademicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jefes_departamentos_academicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',255);
            $table->integer('departamento_academico_id')->unsigned();
            $table->foreign('departamento_academico_id')->references('id')->on('departamentos_academicos')->onDelete('cascade');
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
        Schema::drop('jefes_departamentos_academicos');
    }
}
