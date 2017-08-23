<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programacao extends Model
{
    protected $fillable = ['data', 'horario', 'espetaculo_id'];

    public function espetaculos(){

		return $this->hasMany('App\Espetaculo');
	}
 
}
