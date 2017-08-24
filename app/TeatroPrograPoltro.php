<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeatroPrograPoltro extends Model
{

	public function poltronas(){

		return $this->hasMany('App\Poltrona');
	}

	public function espetaculos(){

		return $this->hasMany('App\Espetaculo');
	}
}
