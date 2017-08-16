<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{

	protected $fillable = ['descricao'];
	// protected $table = ''

    public function itens(){
    	return $this->belongsTo(Item::Class);
	}
}
