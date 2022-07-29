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

Route::get('/noticias/cadastro',[BookController::class,'cadastroNoticia']);

Route::get('/noticias/editar',[BookController::class,'editarNoticia']);

Route::get('/noticias/exibir',[BookController::class,'exibirNoticia']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
