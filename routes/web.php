<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PortoController;
use App\Models\Porto;
use Illuminate\Support\Facades\Route;

// PUBLIK: siapa saja boleh
Route::get('', [LandingController::class, 'index']);
Route::get('data', [LandingController::class, 'data']);
Route::get('project', [LandingController::class, 'project']);

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('portofolio', PortoController::class);
});
