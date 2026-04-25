<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');