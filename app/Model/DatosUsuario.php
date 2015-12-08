<?php

namespace electivos\Model;

use Illuminate\Database\Eloquent\Model;

class DatosUsuario extends Model
{
    protected $table = "datos_usuarios";

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
