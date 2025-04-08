<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'loginForm'])->name('login.form');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');