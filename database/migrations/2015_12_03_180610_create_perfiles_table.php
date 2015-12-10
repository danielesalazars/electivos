<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres',150);
            $table->string('apellidos',150);
            $table->string('telefono',7)->nullable();
            $table->string('celular',9)->nullable();
            $table->mediumText('direccion')->nullable();
            $table->integer('year');
            $table->integer('orden_merito')->nullable();

            $table->integer('usuario_id')->unsigned();

            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');

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
        Schema::drop('perfiles');
    }
}
