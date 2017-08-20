<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bilhete extends Model
{
    protected $fillable = ['valor','id_espetaculo'];

    public function espetaculo(){

		return $this->hasOne('App\Espetaculo');
	}

	 public function reservas(){

		return $this->belongsTo('App\ReservaBilhete');
	}
 
}
