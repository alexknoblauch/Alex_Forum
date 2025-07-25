<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CookingController;
use App\Http\Controllers\TravelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/kochtipps', [CookingController::class, 'index'])->name('cooking.index');
Route::get('/kochtipps/{slug}', [CookingController::class, 'show'])->name('cooking.show');

Route::get('ausflug', [TravelController::class, 'index'])->name('travel.index');
Route::get('ausflug/{slug}', [TravelController::class, 'show'])->name('travel.show');

Route::middleware('auth')->group(function () {
    Route::post('/kochtipps/post', [CookingController::class, 'store'])->name('cooking.store');
    Route::post('/ausflug/post', [TravelController::class, 'store'])->name('travel.store');
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
