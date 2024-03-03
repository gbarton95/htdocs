<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'MovieController@index')->name("index"); 
Route::get('pelicula/{id}','MovieController@show')->name("cartelPeli"); /*Llamaremos a la ruta por su name*/
Route::get('novedades', 'MovieController@novedades')->name("new");
Route::get('proximos_estrenos', 'MovieController@estrenos')->name("estrenos");

Route::get(' ', 'MovieController@titulo')->name("");