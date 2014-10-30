<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::resource('prueba','DeptosController');
Route::resource('users','UsersController');




Route::get('/', function()
{
	return View::make('hello');
});

Route::pattern('nombre','[a-z-A-Z]+');
Route::pattern('edad','[0-9]+');

Route::get('usuario/{nombre?}/{edad?}',array('before'=>'session', function($nombre=null, $edad=null){
	if(!$nombre){
		return "Hola Usuario";
	}
	else{
		return "Hola ".$nombre." Tu edad  es ". $edad;
	}
		
}));

Route::get('session/crear', function(){
	Session::put('nombre','David');
	return 'Se creo la sesion correctamente';
});

Route::get('session/eliminar', function(){
	Session::forget('nombre');
	return 'El Campo nombre fue Eliminado de la session';
});

