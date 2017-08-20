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
            $table->integer('cliente_id')->unsigned();
            $table->integer('bilhete_id')->unsigned();

            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('bilhete_id')->references('id')->on('bilhetes')->onDelete('cascade');
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
