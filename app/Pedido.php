<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{

	protected $fillable = ['descricao'];

    public function itens(){
    	return $this->belongsTo(Item::Class);
	}
}
