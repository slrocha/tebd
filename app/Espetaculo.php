<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Espetaculo extends Model
{
    protected $fillable = ['nome', 'id_espetaculo'];

    public function bilhete (){

		return $this->belongsTo('App\Bilhete');
	}

	public function teatro (){

		return $this->belongsTo('App\Teatro');
	}
 
}
