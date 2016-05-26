<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCotizaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizaciones', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->string('cliente_id')->unsigned();
            $table->integer('total_horas');
            $table->float('total_monto');

            $table->timestamps();
        });

        Schema::table('cotizaciones', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('usuarios');
            $table->foreign('cliente_id')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cotizaciones');
    }
}
