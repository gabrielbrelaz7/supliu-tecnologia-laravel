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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', [HomepageController::class, 'index']);
    Route::get('/excluir-album/{idAlbum}', [AlbumController::class, 'destroy']);
    Route::post('/albuns', [AlbumController::class, 'store']);
    Route::get('/excluir-faixa/{idFaixa}', [FaixaController::class, 'destroy']);
    Route::get('/faixas/{idAlbum}', [FaixaController::class, 'index']);Route::get('/faixas/{idAlbum}', [FaixaController::class, 'index']);
    Route::post('/faixas', [FaixaController::class, 'store']);
});
