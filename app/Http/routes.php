<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */
Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home'
]);

Route::get('iniciar-sesion', [
    'uses' => 'Auth\AuthController@getLogin',
    'as' => 'login'
]);
Route::post('iniciar-sesion', 'Auth\AuthController@postLogin');

Route::get('cerrar-sesion', [
    'uses' => 'Auth\AuthController@getLogout',
    'as' => 'logout'
]);

Route::get('registro', [
    'uses' => 'Auth\AuthController@getRegister',
    'as' => 'register'
]);
Route::post('registro', 'Auth\AuthController@postRegister');

Route::get('complementarios',[
   'uses'   =>  'ComplementariosController@lista',
    'as'    =>  'complementarios'
]);

Route::get('externado',[
   'uses'   =>  'ExternadoController@lista',
    'as'    =>  'externado'
]);

Route::get('vacaciones',[
   'uses'   =>  'VacacionesController@lista',
    'as'    =>  'vacaciones'
]);