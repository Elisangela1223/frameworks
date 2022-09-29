<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

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

Route::get('/cardapio', function () {
    return view('cardapio');
});

Route::get('/formulario', function () {
    return view('formulario');
});

Route::post('/envio', function () {
    return 1;
});


Route::get('/users', ([UserController::class, 'index']);  // listar ou leitura.
Route::get('/users/crete',[UserController::, class'create'])); // criar um usuario.
Route::get('/users', [UserController::, class, 'stors']); // salva o usuario
Route::get('/users/{id}',[UserController::, class 'show']); // atualiza o usuario.
Route::get('/users/{id}',[UserController::, class 'update']); //atualizar usuario.
Route::delete('/users/{id}',[UserController::, class 'destroy']); //remover
