<?php

use App\Http\Controllers\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ProductController;
Route::get('/products', [ProductController::class, 'index']);
    