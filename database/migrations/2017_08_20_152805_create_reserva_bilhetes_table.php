<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservaBilhetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva_bilhetes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tempo_reserva')->nullable();
            $table->string('status')->nullable();
            $table->integer('forma_adquirir')->nullable();            
            $table->integer('id_cliente')->unsigned();
            $table->integer('id_bilhete')->unsigned();

            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('id_bilhete')->references('id')->on('bilhetes')->onDelete('cascade');
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
        Schema::dropIfExists('reserva_bilhetes');

    }
}
