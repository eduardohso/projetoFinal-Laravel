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
use App\Http\Controllers\BookController;

Route::get('/',[BookController::class,'index']);

Route::get('/noticias/cadastro',[BookController::class,'cadastroNoticia'])->middleware('auth');

Route::get('/noticias/{id}',[BookController::class,'exibirNoticia']);

Route::post('/noticias',[BookController::class,'salvarNoticia']);

Route::get('/noticias/editar/{id}',[BookController::class,'editarNoticia'])->middleware('auth');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
