<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'createLogin'])->name('login');
Route::post('/login', [AuthController::class, 'storeLogin'])->name('login.store');

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});

