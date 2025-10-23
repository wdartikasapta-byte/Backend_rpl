<?php
use App\Http\Controllers\{CuacaController, RekomendasiController};

Route::get('/', [CuacaController::class, 'index'])->name('cuaca.index');
Route::post('/cuaca/cari', [CuacaController::class, 'cari'])->name('cuaca.cari');

Route::get('/rekomendasi', [RekomendasiController::class, 'index'])->name('rekom.index');
Route::post('/rekomendasi/cari', [RekomendasiController::class, 'cari'])->name('rekom.cari');
