<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poltrona extends Model
{
    protected $fillable = ['num_fila', 'posicao_fila'];

    public function poltrona(){

		return $this->belongsTo('App\Teatro');
	}
}
 
