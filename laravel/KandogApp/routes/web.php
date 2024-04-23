<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Welcome
Route::get('/', function () {
    return view('welcome');
});

Route::view('/register', 'auth.register')->name('register');

//Primera vista, sin controlador
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Para acceder a las siguientes rutas hay un middleware de autenticación:
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
