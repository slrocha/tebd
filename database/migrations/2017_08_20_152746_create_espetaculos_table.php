<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspetaculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('espetaculos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome')->nullable();
            $table->integer('id_teatro')->unsigned();

            $table->foreign('id_teatro')->references('id')->on('teatros')->onDelete('cascade');
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
        Schema::dropIfExists('espetaculos');

    }
}
