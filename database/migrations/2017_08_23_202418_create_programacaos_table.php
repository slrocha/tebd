<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramacaosTable extends Migration
{
   
    public function up()
    {
        Schema::create('programacaos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data');
            $table->string('horario');
            $table->integer('espetaculo_id')->unsigned();

            $table->foreign('espetaculo_id')->references('id')->on('espetaculos')->onDelete('cascade');
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
        Schema::dropIfExists('programacaos');

    }
}
