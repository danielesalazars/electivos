<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlternativasRubricaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternativas_rubrica', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descripcion');
            $table->string('nota',255);
            $table->integer('tema_rubrica_id')->unsigned();
            $table->foreign('tema_rubrica_id')->references('id')->on('temas_rubrica')->onDelete('cascade');
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
        Schema::drop('alternativas_rubrica');
    }
}
