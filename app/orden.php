<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orden extends Model
{
    protected $fillable[
		'id',
		'idusuario',
		'idevento',
		'precio',
		'cantidad'
	];
	public function users()
    {
        return $this->hasMany('App\User');
    }

    public function eventos()
    {
        return $this->hasMany('App\evento');
    }
}
