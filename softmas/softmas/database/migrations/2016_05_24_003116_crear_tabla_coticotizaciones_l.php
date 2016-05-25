<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCoticotizacionesL extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizaciones_l', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_cotizacion');
            $table->foreign('id_cotizacion')->references('id')->on('cotizaciones');
            $table->integer('horas');
            $table->float('valor');
            $table->date('fecha_entrega');
            $table->date('fecha_inicio');

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
        Schema::drop('cotizaciones_l');
    }
}
