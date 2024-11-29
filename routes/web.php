<?php

use App\Http\Controllers\DragonController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrainerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('dragon', [DragonController::class, 'index']);
Route::get('dragon/create', [DragonController::class, 'create']);
Route::post('dragon', [DragonController::class, 'store']);
Route::get('dragon/{id}/edit', [DragonController::class, 'edit']);
Route::put('dragon/{id}', [DragonController::class, 'update']);
Route::delete('dragon/{id}', [DragonController::class, 'destroy']);

Route::get('trainer', [TrainerController::class, 'index']);
Route::get('trainer/create', [TrainerController::class, 'create']);
Route::post('trainer', [TrainerController::class, 'store']);
Route::get('trainer/{id}/edit', [TrainerController::class, 'edit']);
Route::put('trainer/{id}', [TrainerController::class, 'update']);
Route::delete('trainer/{id}', [TrainerController::class, 'destroy']);