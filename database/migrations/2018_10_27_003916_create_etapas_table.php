<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateEtapasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etapas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->string('audio_path');
            $table->boolean('concluido');
            $table->boolean('webcam');
            $table->integer('numero_etapa');
            $table->integer('tentativas');

            //$table->unsignedInteger('peca_etapa')->default(null);
            //$table->foreign('peca_etapa')->references('id')->on('pecas');
            $table->unsignedInteger('etapa_exercicio');
            $table->foreign('etapa_exercicio')->references('id')->on('etapas');
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
        Schema::dropIfExists('etapas');
    }
}
