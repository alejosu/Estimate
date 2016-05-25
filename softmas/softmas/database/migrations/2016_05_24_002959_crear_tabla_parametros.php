<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaParametros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametros', function (Blueprint $table) {
            $table->increments('id');

            $table->decimal('por_doc_tec');
            $table->decimal('por_doc_cons');
            $table->decimal('por_pru_tec');
            $table->decimal('por_pru_cons');
            $table->decimal('por_recopilacion');

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
        Schema::drop('parametros');
    }
}
