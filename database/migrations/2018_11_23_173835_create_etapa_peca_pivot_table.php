<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtapaPecaPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etapa_peca', function (Blueprint $table) {
            $table->integer('etapa_id')->unsigned()->index();
            $table->foreign('etapa_id')->references('id')->on('etapas')->onDelete('cascade');
            $table->integer('peca_id')->unsigned()->index();
            $table->foreign('peca_id')->references('id')->on('pecas')->onDelete('cascade');
            $table->primary(['etapa_id', 'peca_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('etapa_peca');
    }
}
