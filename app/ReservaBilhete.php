<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservaBilhete extends Model
{
    protected $fillable = ['tempo_reserva','status','forma_adquirir','id_cliente','id_bilhete' ];

    public function bilhete(){

		return $this->hasOne('App\Bilhete');
	}

	 public function cliente(){

		return $this->hasOne('App\Cliente');
	}
}
