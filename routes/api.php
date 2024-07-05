<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AsupanController;
use App\Http\Controllers\Api\SuplemenController;

Route::prefix('asupan')->group(function () {
    Route::get('/', [AsupanController::class, 'index'])->name('api.asupan.index');
    /* // api just get data
    Route::post('/', [AsupanController::class, 'store'])->name('api.asupan.store');
    Route::get('/{id}', [AsupanController::class, 'show'])->name('api.asupan.show');
    Route::put('/{id}', [AsupanController::class, 'update'])->name('api.asupan.update');
    Route::delete('/{id}', [AsupanController::class, 'destroy'])->name('api.asupan.destroy');
    */
});

Route::prefix('suplemen')->group(function () {
    Route::get('/', [SuplemenController::class, 'index'])->name('api.suplemen.index');
    /*  // api just get data
    Route::post('/', [SuplemenController::class, 'store'])->name('api.suplemen.store');
    Route::get('/{id}', [SuplemenController::class, 'show'])->name('api.suplemen.show');
    Route::put('/{id}', [SuplemenController::class, 'update'])->name('api.suplemen.update');
    Route::delete('/{id}', [SuplemenController::class, 'destroy'])->name('api.suplemen.destroy');
    */
});
