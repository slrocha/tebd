<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',100);
            $table->string('cpf',14)->unique();
            $table->string('dt_nascimento');
            $table->string('telefone')->nullable();
            $table->tinyInteger('is_vip'); 
            $table->integer('endereco_id')->unsigned();

            $table->foreign('endereco_id')->references('id')->on('enderecos')->onDelete('cascade');
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
        Schema::dropIfExists('clientes');

    }
}
