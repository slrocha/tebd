<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeatrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teatros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome')->nullable();
            $table->integer('id_poltrona')->unsigned();

            $table->foreign('id_poltrona')->references('id')->on('poltronas')->onDelete('cascade');
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
        Schema::dropIfExists('teatros');

    }
}
