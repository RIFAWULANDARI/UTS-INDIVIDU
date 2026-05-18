<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman dashboard laporan
Route::resource('laporans', LaporanController::class);