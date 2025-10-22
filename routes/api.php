<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CuacaController;
use App\Http\Controllers\RekomendasiController;

Route::apiResource('cuaca', CuacaController::class);

// Rekomendasi Tanam
Route::get('/rekomendasi', [RekomendasiController::class, 'index']);
Route::post('/rekomendasi', [RekomendasiController::class, 'store']);
Route::get('/rekomendasi/{id}', [RekomendasiController::class, 'show']);
Route::put('/rekomendasi/{id}', [RekomendasiController::class, 'update']);
Route::delete('/rekomendasi/{id}', [RekomendasiController::class, 'destroy']);
// Route tambahan: ambil rekomendasi berdasarkan ID tertentu
Route::get('/rekomendasi-tanam/filter', [RekomendasiController::class, 'getByFilter']);

Route::get('/test', function() {
    return ['message' => 'Laravel jalan'];
});
