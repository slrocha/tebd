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
            $table->string('nome',100)->nullable();
            $table->string('cpf',14)->nullable();
            $table->string('dt_nascimento')->nullable();
            $table->string('telefone')->nullable();
            $table->char('is_vip', 2); 
            $table->integer('id_endereco')->unsigned();

            $table->foreign('id_endereco')->references('id')->on('enderecos')->onDelete('cascade');
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
