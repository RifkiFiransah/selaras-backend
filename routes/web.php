<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'mitra_index'])->name('mitra.dashboard');
Route::get('/login_mitra', [AuthController::class, 'login_mitra'])->name('mitra.login');
Route::get('/registrasi_mitra', [AuthController::class, 'registrasi_mitra'])->name('mitra.registrasi');
Route::post('/registrasi_mitra', [AuthController::class, 'post_registrasi_mitra'])->name('mitra.signUp');
Route::post('/login_mitra', [AuthController::class, 'post_login_mitra'])->name('mitra.signIn');

Route::resource('/products_mitra', ProductController::class);