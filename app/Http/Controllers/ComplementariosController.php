<?php

namespace electivos\Http\Controllers;

use electivos\Http\Controllers\Controller;

class ComplementariosController extends Controller
{
    public function lista(){
        return view('complementarios.lista');
    }
}
