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
/*
Route::get('/', function()
{
	return View::make('hello');
});*/


// ruta de logueo sin autorizar
/*Route::get('web', function()
{
	 return View::make('web.index');

});
*/
Route::group(array('prefix' => 'web'), function()
{
	Route::get('/autoridades', function()
	{
		return View::make('web.autoridades');
	});
	Route::get('/staff', function()
	{
		return View::make('web.staff');
	});

	Route::get('/ampliarnoticia', function()
	{
		return View::make('web.ampliarnoticia');
	});

	Route::get('/noticia', function()
	{
		return View::make('web.noticia');
	});

	Route::get('/original', function()
		{
			 return View::make('web.original');
		});
	
	
	Route::get('', function()
		{
			 return View::make('web.index');
		});
	Route::get('/galeria', function()
	{
		 return View::make('web.galeria');
	});
		
});

Route::get ('login' ,array('uses' => 'LoginController@logIn' ));
Route::post('login' ,array('uses' => 'LoginController@logIn' ));
Route::get ('logout',array('uses' => 'LoginController@logOut'));

//ruta sistema con autorizacion
Route::group(array('before' => 'auth'), function()
{

		Route::get('home', array('uses' => 'HomeController@getIndex'));
		//Route::controller('/', 	'HomeController');
		
		Route::controller('torneos',	'TorneoController');
		Route::controller('modulos',	'ModulosController');
		Route::controller('usuarios',	'UsuariosController');
		Route::controller('perfiles',	'PerfilesController');
		Route::controller('temporada', 	'TemporadaController');
		Route::controller('club', 		'ClubController');
		Route::controller('equipo', 	'EquipoController');
		Route::controller('jugador', 	'JugadorController');
		Route::controller('menu',	 	'MenuController');
		Route::controller('submenu',	 'SubMenuController');

		Route::get('base', function()
		{
			$data['action'] = "edit";
			$data['modelo'] = Menu::find(3);

			return View::make('base.base')->with($data);
		});
				
});


