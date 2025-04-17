<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RekomendasiController;

Route::get('/', function () {
    return view('home');
})->name('home');

// Halaman pemilihan jenis kulit
Route::get('/jenis-kulit', [RekomendasiController::class, 'jenisKulit'])->name('jenis-kulit');

// Form rekomendasi (opsional)
Route::get('/rekomendasi', [RekomendasiController::class, 'form'])->name('rekomendasi.form');

// Hasil rekomendasi berdasarkan input 'jenis'
Route::get('/rekomendasi/hasil', [RekomendasiController::class, 'index'])->name('rekomendasi.hasil');

// Klik langsung berdasarkan jenis kulit (dari jenis-kulit.blade.php)
Route::get('/rekomendasi/{tipe}', [RekomendasiController::class, 'tampilkanjenis'])->name('rekomendasi');
