<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',255);
            $table->string('apellido',255);
            $table->string('email')->unique();
            $table->string('telefono',7)->nullable();
            $table->string('celular',9)->nullable();
            $table->boolean('activo')->onDefault(true);
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
        Schema::drop('tutores');
    }
}
