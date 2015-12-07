<?php

namespace electivos\Http\Controllers;

use Illuminate\Http\Request;

use electivos\Http\Requests;
use electivos\Http\Controllers\Controller;

class HomeController extends Controller
{
	public function __construct(){

		$this->middleware('auth');

	}

    public function index(){
    	
    	return view('home');

    }
}
