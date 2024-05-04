<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\ScoreController;




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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/tournaments/index', [TournamentController::class, 'index'])->name('tournaments.index');
Route::get('/tournaments/create', [TournamentController::class, 'create'])->name('tournaments.create');
Route::get('/tournaments/{tournament}', [TournamentController::class, 'show'])->name('tournaments.show');
Route::get('/tournaments/{tournament}/edit', [TournamentController::class, 'edit'])->name('tournaments.edit');
Route::delete('/tournaments/{tournament}', [TournamentController::class, 'destroy'])->name('tournaments.destroy');
Route::post('/tournaments', [TournamentController::class, 'store'])->name('tournaments.store');

Route::get('/scores/index', [ScoreController::class, 'index'])->name('scores.index');
Route::get('/scores/{score}/edit', [ScoreController::class, 'edit'])->name('scores.edit');
Route::get('/scores/create', [ScoreController::class, 'create'])->name('scores.create');
Route::post('/scores', [ScoreController::class, 'store'])->name('scores.store');
Route::delete('/scores/{score}', [ScoreController::class, 'destroy'])->name('scores.destroy');
Route::put('/scores/{score}', [ScoreController::class, 'update'])->name('scores.update');
//Route::post('/scores/{score}/update', [ScoreController::class, 'index'])->name('scores.update');


Route::view('/', 'upc.home')             -> name('home');
Route::view('/demo', 'upc.demo')             -> name('demo');
Route::view('/aboutus', 'upc.aboutus')             -> name('aboutus');

Route::view('/home', 'upc.home')             -> name('home');





Auth::routes();

