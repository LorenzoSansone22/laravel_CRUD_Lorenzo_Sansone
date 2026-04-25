<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articoli', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articoli/crea', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/articoli/store', [ArticleController::class, 'store'])->name('articles.store');
Route::get('/articoli/{article}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/articoli/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('/articoli/{article}/update', [ArticleController::class, 'update'])->name('articles.update');
Route::delete('/articoli/{article}/delete', [ArticleController::class, 'destroy'])->name('articles.destroy');