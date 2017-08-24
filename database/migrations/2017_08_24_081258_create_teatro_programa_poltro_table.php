<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeatroProgramaPoltroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teatro_progra_poltros', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('teatro_id')->unsigned();
            $table->integer('poltrona_id')->unsigned();
            $table->integer('programacao_id')->unsigned();

            $table->foreign('teatro_id')->references('id')->on('teatros')->onDelete('cascade');
            $table->foreign('poltrona_id')->references('id')->on('poltronas')->onDelete('cascade');
            $table->foreign('programacao_id')->references('id')->on('programacaos')->onDelete('cascade');
           
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
        
        Schema::dropIfExists('teatro_progra_poltros');
    }
}
 