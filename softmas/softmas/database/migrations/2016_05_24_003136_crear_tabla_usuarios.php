<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('empresa')->unsigned();
            $table->integer('cedula');
            $table->string('nombre');
            $table->string('cargo');

            $table->timestamps();
        });

        Schema::table('usuarios', function (Blueprint $table) {
            $table->foreign('empresa')->references('id')->on('empresas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuarios');
    }
}
