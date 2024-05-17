<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdottoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prodotti', [ProdottoController::class, 'index']);
Route::get('/prodotti/create', [ProdottoController::class, 'create']);
Route::post('/prodotti', [ProdottoController::class, 'store']);
Route::get('/prodotti/{prodotto}', [ProdottoController::class, 'show']);
Route::get('/prodotti/{prodotto}/edit', [ProdottoController::class, 'edit'])->name('prodotti.edit'); // Aggiungo il nome alla route
Route::put('/prodotti/{prodotto}', [ProdottoController::class, 'update'])->name('prodotti.update');
Route::delete('/prodotti/{prodotto}', [ProdottoController::class, 'destroy']);
