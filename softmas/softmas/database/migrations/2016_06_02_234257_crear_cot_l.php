<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearCotL extends Migration
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

             $table->integer('cotizacion_id')->unsigned()->index();
             $table->integer('horas');
             $table->float('valor');
             $table->date('fecha_entrega');
             $table->date('fecha_inicio');

             $table->timestamps();
         });

         Schema::table('cotizaciones_l', function (Blueprint $table) {
             $table->foreign('cotizacion_id')->references('id')->on('cotizaciones');
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
