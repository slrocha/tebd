<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['descricao','valor','quantidade', 'pedido_id'];

    public function pedido(){
    	return $this->hasMany('Pedido');
	}
}
