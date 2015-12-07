<?php

namespace electivos;

use Illuminate\Database\Eloquent\Model;

class DatosUsuario extends Model
{
    protected $table = "datos_usuario";

    protected $fillable = [
    	'nombres',
	    'apellidos',
	    'telefono',
	    'celular',
	    'direccion',
	    'year',
	    'orden_merito'
    ];
}
