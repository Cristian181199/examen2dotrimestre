<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MonographController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Ruta para las monografias
Route::resource('monographs', MonographController::class)
    ->middleware('can:see-monographs, auth');

// Ruta para /articulos
Route::get('/articles', [ArticleController::class, 'index'])
    ->middleware('auth');

require __DIR__.'/auth.php';
