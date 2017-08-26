<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome', 'cpf', 'dt_nascimento', 'telefone', 	'is_vip', 'id_endereco'];

    public function reservas(){

		return $this->hasMany('App\ReservaBilhete');
	}

	 public function endereco(){

		return $this->hasOne('App\Endereco','cliente_id');
	}
 
}
