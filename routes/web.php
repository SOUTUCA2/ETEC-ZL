<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::view('/', 'welcome');
Route::view('/noticias', 'noticias');
Route::view('/sobre', 'sobre');
Route::view('/cursos', 'cursos');
Route::view('/vestibulinho', 'vestibulinho');
Route::controller(ContatoController::class)->group(function () {
    Route::get('/contato', 'index')->name('contato');
    Route::post('/contato', 'store');
});
Route::view('/infraestrutura', 'infraestrutura');
