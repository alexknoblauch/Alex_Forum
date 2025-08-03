<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CookingController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HelpingController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/kochtipps', [CookingController::class, 'index'])->name('cooking.index');
Route::get('/kochtipps/{slug}', [CookingController::class, 'show'])->name('cooking.show');

Route::get('ausflug', [TravelController::class, 'index'])->name('travel.index');
Route::get('ausflug/{slug}', [TravelController::class, 'show'])->name('travel.show');

Route::get('/buchtipps', [BookController::class, 'index'])->name('book.index');
Route::get('/buchtipps/{slug}', [BookController::class, 'show'])->name('book.show');

Route::get('/tricks-und-tipps', [TrickController::class, 'index'])->name('trick.index');

Route::get('/helfende-hand', [HelpingController::class, 'index'])->name('helping.index');
Route::get('/helfende-hand/{slug}', [HelpingController::class, 'show'])->name('helping.show');

Route::middleware('auth')->group(function () {
    Route::post('/kochtipps/post', [CookingController::class, 'store'])->name('cooking.store');
    Route::post('/ausflug/post', [TravelController::class, 'store'])->name('travel.store');
    Route::post('/helfende-hand/post', [HelpingController::class, 'store'])->name('helping.store');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

require __DIR__.'/auth.php';
