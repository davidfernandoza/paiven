<?php


Route::get('/', function () {
	return view('ui');
});

// Auth
Route::get('/control',							'Auth\LoginController@index')->name('login');
Route::post('/control/login', 			'Auth\LoginController@login');
Route::post('/control/logout', 			'Auth\LoginController@logout');
Route::get('/control/recuperar', 		'Auth\ForgotPasswordController@index');
Route::post('/control/email', 			'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('/control/retomar/{token}',
'Auth\ResetPasswordController@index')->name('password.reset');
Route::post('/control/recuperar', 	'Auth\ResetPasswordController@reset');

// Protected routes.
Route::group(['middleware'=>'auth'], function(){

	// TRM
	Route::get('/control/trm',								'Trm\IndexController@index');
	Route::put('/control/trm/editar', 				'Trm\UpdateController@index');

	// Profile
	Route::get('/control/perfil', 							'Profile\IndexController@profile');
	Route::put('/control/perfil',								'Profile\UpdateController@profile');
	Route::get('/control/perfil/password', 			'Profile\IndexController@password');
	Route::put('/control/perfil/password', 			'Profile\UpdateController@password');

	// Protected Rol
	Route::group(['middleware'=>'rol'], function(){

		// Countries
		Route::get('/control/paises', 						'Countries\IndexController@index');
		Route::post('/control/paises/crear', 			'Countries\CreateController@index');
		Route::put('/control/paises/editar', 			'Countries\UpdateController@index');
		Route::delete('/control/paises/eliminar',	'Countries\DeleteActivateController@delete');
		Route::delete('/control/paises/activar',	'Countries\DeleteActivateController@activate');

		// Users
		Route::get('/control/usuarios', 						'Users\IndexController@list');
		Route::get('/control/usuarios/crear',				'Users\IndexController@new');
		Route::post('/control/usuarios/crear', 			'Users\CreateController@index');
		Route::put('/control/usuarios/editar', 			'Users\UpdateController@index');
		Route::delete('/control/usuarios/eliminar',	'Users\DeleteActivateController@delete');
		Route::delete('/control/usuarios/activar',	'Users\DeleteActivateController@activate');
	});
});
