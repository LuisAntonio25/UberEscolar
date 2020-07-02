<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::middleware('already-logged')->group(function() {

	// Usuários

	Route::get('/login', function () {
    	return view('login');
	})->name('login');

	Route::post('/login/form', 'UsuariosController@index')->name('login.form');

	Route::prefix('cadastro')->group(function() {
		Route::get('/', function() {
			return view('cadastro/index');
		})->name('cadastro.index');

		Route::get('/cliente', function() {
			return view('cadastro/cliente');
		})->name('cadastro.cliente');

		Route::get('/condutor', function() {
			return view('cadastro/condutor');
		})->name('cadastro.condutor');

		Route::post('cliente/form', [
			'uses' => 'UsuariosController@store',
			'form' => 'cliente'
		])->name('cadastro.cliente.form');

		Route::post('condutor/form', [
			'uses' => 'UsuariosController@store',
			'form' => 'condutor'
		])->name('cadastro.condutor.form');
	});
});

// Plataforma

Route::middleware('not-logged')->group(function() {
	Route::get('/condutores', [
	'uses' => 'UsuariosController@list',
	'view' => 'condutores'
])->name('condutores');

	Route::get('logout', 'UsuariosController@logout')->name('logout');
});

Route::post('cadClienteForm', 'usuarioController@cadCliente')->name('cadClienteForm');