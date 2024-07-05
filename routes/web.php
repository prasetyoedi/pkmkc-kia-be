<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\SuplemenController;
use App\Http\Controllers\AsupanController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

// Pasien
Route::prefix('pasien')->group(function () {
    Route::get('/', [PasienController::class, 'index'])->name('pasien.index');
});

// Suplemen
Route::prefix('suplemen')->group(function () {
    Route::get('/', [SuplemenController::class, 'index'])->name('suplemen.index');
    Route::get('/tambah', [SuplemenController::class, 'create'])->name('suplemen.create');
    Route::post('/tambah', [SuplemenController::class, 'store'])->name('suplemen.store');
    Route::get('/{id}/edit', [SuplemenController::class, 'edit'])->name('suplemen.edit');
    Route::put('/{id}', [SuplemenController::class, 'update'])->name('suplemen.update');
    Route::delete('/{id}', [SuplemenController::class, 'destroy'])->name('suplemen.destroy');
});

// Asupan
Route::prefix('asupan')->group(function () {
    Route::get('/', [AsupanController::class, 'index'])->name('asupan.index');
    Route::get('/tambah', [AsupanController::class, 'create'])->name('asupan.create');
    Route::post('/tambah', [AsupanController::class, 'store'])->name('asupan.store');
    Route::get('/{id}/edit', [AsupanController::class, 'edit'])->name('asupan.edit');
    Route::put('/{id}', [AsupanController::class, 'update'])->name('asupan.update');
    Route::delete('/{id}', [AsupanController::class, 'destroy'])->name('asupan.destroy');
});