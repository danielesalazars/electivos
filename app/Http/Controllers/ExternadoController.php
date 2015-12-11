<?php

namespace electivos\Http\Controllers;

use electivos\Http\Controllers\Controller;

class ExternadoController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function lista(){
        return view('externado.lista');
    }
}
