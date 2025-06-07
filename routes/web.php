<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\AdminPanelController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', [NewsController::class, 'index']);
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');



Route::get('/admin', [AdminPanelController::class, 'index'])->name('admin.admin_main');
