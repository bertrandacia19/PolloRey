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
Route::view('/', 'paginaPrincipal')->name('paginaPrincipal');
Route::view('/recetas', 'recetas')->name('recetas');

Route::get('/producto', 'carruselController')->name('producto');
Route::view('/contacto', 'Contacto')-> name('contacto');
Route::post('Contacto', 'validacionController@store')->name('Contacto');
