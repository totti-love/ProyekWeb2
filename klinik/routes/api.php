<?php

use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\KunjunganController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\RekamMedisController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('dokter', [DokterController::class, 'getDokter']);
Route::post('dokter', [DokterController::class, 'storeDokter']);
Route::delete('dokter/{id}', [DokterController::class, 'destroyDokter']);
Route::put('dokter/{id}', [DokterController::class, 'updateDokter']);
