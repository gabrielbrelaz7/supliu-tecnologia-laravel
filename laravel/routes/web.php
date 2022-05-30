<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\FaixaController;

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


Route::get('/', [HomepageController::class, 'index']);

Route::get('/cadastrar-album', [AlbumController::class, 'index']);
Route::get('/excluir-album/{idAlbum}', [AlbumController::class, 'destroy']);
Route::post('/albuns', [AlbumController::class, 'store']);


Route::get('/cadastrar-faixa/{idAlbum}', [FaixaController::class, 'create']);
Route::get('/excluir-faixa/{idFaixa}/{idAlbum}', [FaixaController::class, 'destroy']);
Route::get('/faixas/{idAlbum}', [FaixaController::class, 'index']);
Route::post('/faixas', [FaixaController::class, 'store']);

Route::get('/login', function () {
    return view('login');
});


Route::get('/cadastro', function () {
    return view('register');
});
