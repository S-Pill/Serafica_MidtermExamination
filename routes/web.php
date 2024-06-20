<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

// Route::get('/anime', function () {
//     return view('anime');
// });
Route::get('/anime', [ProductController::class, 'index']);

Route::get('/anime', [ProductController::class, 'index'])->name('anime');
