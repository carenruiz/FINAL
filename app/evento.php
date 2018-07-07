<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evento extends Model
{
    protected $fillable = [
    	'id',
    	'nombre',
    	'descripcion',
    	'horario',
    	'fecha',
    	'precio',
    	'cantidad',
    	'imagen'
    ];

}
