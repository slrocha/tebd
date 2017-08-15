<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao',30)->nullable();
            $table->decimal('valor',10,2)->nullable();
            $table->integer('pedido_id')->unsigned();

            $table->foreign('pedido_id')->references('id')->on('pedidos')->onDelete('cascade');

            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itens');
    }
}
