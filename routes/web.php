<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ClienteController;

Route::match(['get', 'post'], '/', [ProdutoController::class, 'index'])->name('home');
Route::match(['get', 'post'], '/categoria', [ProdutoController::class, 'categoria'])->name('categoria');
Route::match(['get', 'post'], '/cadastrar', [ClienteController::class, 'cadastrar'])->name('cadastrar');