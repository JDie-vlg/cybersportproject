<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', [NewsController::class, 'index']);
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');
