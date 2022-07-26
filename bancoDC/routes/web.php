<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



/** Usuarios */
Route::get('/inicio', 'App\Http\Controllers\UsuariosController@index')->name('usuario.inicio');

/** Prestamos */
Route::prefix('prestamos')->group(function () {
    Route::get('/calculo/{id?}/', 'App\Http\Controllers\PrestamosController@index')->name('prestaciones.index');
    Route::get('/showUser/{id}', 'App\Http\Controllers\PrestamosController@showUser')->name('prestaciones.mostrarusuario');
    Route::post('/mensaje/{id?}', 'App\Http\Controllers\PrestamosController@store')->name('prestaciones.store');
});




