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

            $table->integer('usuario_id')->unsigned()->index();
            $table->integer('cliente_id')->unsigned()->index();
            $table->integer('total_horas');
            $table->float('total_monto');

            $table->timestamps();
        });

        Schema::table('cotizaciones', function (Blueprint $table) {
            $table->foreign('usuario_id')->references('id')->on('usuarios');
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
