<?php

namespace electivos\Http\Controllers;

use electivos\Http\Controllers\Controller;
use electivos\Model\Usuario;

class VacacionesController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function lista(){
        $usuarios = Usuario::paginate(10);
        return view('vacaciones.lista', compact('usuarios'));
    }
}
