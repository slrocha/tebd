<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teatro extends Model
{
    protected $fillable = ['nome','id_poltrona'];

 	public function poltronas(){

		return $this->hasMany('App\Poltrona');
	}

	public function espetaculos(){

		return $this->hasMany('App\Espetaculo');
	}
}
