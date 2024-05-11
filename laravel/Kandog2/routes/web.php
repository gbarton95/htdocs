<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PerroController;
use App\Http\Controllers\SesionController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('sesiones', 'SesionController@index')->middleware(['auth', 'verified'])->name('calendario');

//Rutas de sesiones
Route::post('sesion/buscar', [SesionController::class, 'search'])->middleware(['auth', 'verified'])->name('sesion.search');
Route::get('sesion/create/{id}', 'SesionController@createSesion')->middleware(['auth', 'verified'])->name('sesion.create2');
Route::resource('sesion', SesionController::class)->middleware(['auth', 'verified']);

//Rutas de perros
Route::post('perro/buscar', [PerroController::class, 'search'])->middleware(['auth', 'verified'])->name('perro.search');
Route::get('perro/ordenar', [PerroController::class, 'ordenarTabla'])->name('perro.ordenarTabla');
Route::resource('perro', PerroController::class)->middleware(['auth', 'verified']);


require __DIR__.'/auth.php';
