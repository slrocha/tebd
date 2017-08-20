<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBilhetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bilhetes', function (Blueprint $table) {
            $table->increments('id');
            $table->float('valor')->nullable();
            $table->integer('id_espetaculo')->unsigned();

            $table->foreign('id_espetaculo')->references('id')->on('espetaculos')->onDelete('cascade');
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
        Schema::dropIfExists('bilhetes');

    }
}
