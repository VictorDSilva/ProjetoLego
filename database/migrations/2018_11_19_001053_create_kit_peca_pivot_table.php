<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKitPecaPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kit_peca', function (Blueprint $table) {
            $table->integer('kit_id')->unsigned()->index();
            $table->foreign('kit_id')->references('id')->on('kits')->onDelete('cascade');
            $table->integer('peca_id')->unsigned()->index();
            $table->foreign('peca_id')->references('id')->on('pecas')->onDelete('cascade');
            $table->primary(['kit_id', 'peca_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kit_peca');
    }
}
