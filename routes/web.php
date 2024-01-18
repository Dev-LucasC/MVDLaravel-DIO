<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnderecoController;

Route::get('/', [EnderecoController::class, 'index']);
Route::get('/buscar', [EnderecoController::class, 'buscar'])->name('buscar');
Route::get('/adicionar', [EnderecoController::class, 'adicionar'])->name('adicionar');
Route::post('/salvar', [EnderecoController::class, 'salvar'])->name('salvar');
