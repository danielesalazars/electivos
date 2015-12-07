<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadesExtracurricularesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades_extracurriculares', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',255);
            $table->integer('tipo_actividad_id')->unsigned();
            $table->foreign('tipo_actividad_id')->references('id')->on('tipo_actividades')->onDelete('cascade');
            
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
        Schema::drop('actividades_extracurriculares');
    }
}
