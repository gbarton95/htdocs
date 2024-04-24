<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Welcome
Route::view('/', 'welcome');

// .../registro
Route::view('/registro', 'auth.register')->name('register');

// kandog.com/resumen
Route::get('/resumen', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



// .../perfil
Route::view('perfil', 'perfil')->name('perfil');

// .../perros
Route::get('/perros', function () {
    return view('perros');
})->middleware(['auth', 'verified'])->name('perros');

// .../eventos
Route::get('/eventos', function () {
    return view('eventos');
})->middleware(['auth', 'verified'])->name('eventos');


// .../recursos
Route::get('/recursos', function () {
    return view('recursos');
})->middleware(['auth', 'verified'])->name('recursos');






//Para acceder a las siguientes rutas hay un middleware de autenticación:
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
