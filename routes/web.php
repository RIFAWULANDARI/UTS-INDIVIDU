<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanController;

// Halaman Beranda
Route::get('/', [HomeController::class, 'index'])->name('home');

// CRUD Laporan Desa
Route::resource('laporans', LaporanController::class);
