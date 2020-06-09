<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/cadastro', function () {
    return view('cadastroCliente');
})->name('cadCliente');

Route::post('cadClienteForm', 'usuarioController@cadCliente')->name('cadClienteForm');