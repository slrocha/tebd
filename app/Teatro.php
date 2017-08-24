<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teatro extends Model
{
    protected $fillable = ['nome','endereco'];

    public function poltronas(){

		return $this->belongsTo('App\Poltrona');
	}

	public function espetaculos(){

		return $this->belongsTo('App\Espetaculo');
	}

 	
}
