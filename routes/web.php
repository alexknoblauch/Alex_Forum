<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CookingController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HelpingController;
use App\Http\Controllers\TrickController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\MongoController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


//Feature Routes
Route::resource('kochtipps', CookingController::class)->only(['index', 'show'])->names(['index' => 'cooking.index', 'show' => 'cooking.show']);
Route::resource('ausflug', TravelController::class)->only(['index', 'show'])->names(['index' => 'travel.index', 'show' => 'travel.show']);
Route::resource('buchtipps', BookController::class)->only(['index', 'show'])->names(['index' => 'book.index', 'show' => 'book.show']);
Route::resource('helfende-hand', HelpingController::class)->only(['index', 'show'])->names(['index' => 'helping.index', 'show' => 'helping.show']);
Route::resource('tricks-und-tipps', TrickController::class)->only(['index', 'show'])->names(['index' => 'trick.index', 'show' => 'trick.show']);



//Authenticated Feature Routes
Route::middleware('auth')->group(function () {
    Route::post('/kochtipps/post', [CookingController::class, 'store'])->name('cooking.store');
    Route::post('/ausflug/post', [TravelController::class, 'store'])->name('travel.store');
    Route::post('/helfende-hand/post', [HelpingController::class, 'store'])->name('helping.store');
    Route::post('/buchtipps/post', [BookController::class, 'store'])->name('book.store');
    Route::post('/comment-post', [CommentController::class, 'store'])->name('comment.store');
});



//Dashboard Route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



//Authenticated Default Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    Route::post('/like/{type}/{post}', [LikeController::class, 'store'])->name('like.store');
    Route::get('/nachrichten', [MongoController::class, 'index'])->name('nachrichten.index');
    Route::get('/nachrichten/{id}', [MongoController::class, 'show'])->name('nachrichten.show');
    Route::post('/nachrichten/store/{id}', [MongoController::class, 'store'])->name('nachrichten.store');
    Route::get('/profile', [MongoController::class, 'index'])->name('profile.index');
    Route::get('/message/all', [MongoController::class, 'getChatPartner'])->name('getChatPartner');
});

require __DIR__.'/auth.php';
