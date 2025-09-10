<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::get('register', [RegisteredUserController::class, 'create'])->name('register.page');
Route::post('register', [RegisteredUserController::class, 'store'])->name('register');

Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login.page');
Route::post('/', [AuthenticatedSessionController::class, 'store'])->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
