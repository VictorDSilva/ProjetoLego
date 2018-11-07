<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExerciciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercicios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->unsignedInteger('etapa_exercicio');
            $table->unsignedInteger('kit_exercicio');
            $table->foreign('etapa_exercicio')->references('id')->on('etapa')->onDelete(cascade);
            $table->foreign('kit_exercicio')->references('id')->on('kit')->onDelete(cascade);
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
        Schema::dropIfExists('exercicios');
    }
}
