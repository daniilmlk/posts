<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts', PostController::class);
Route::get('comments/{post}/create', [CommentController::class, 'create'])->name('comments.create');
Route::post('comments/{post}/store', [CommentController::class, 'store'])->name('comments.store');
Route::get('comments/{post}/edit', [CommentController::class, 'edit'])->name('comments.edit');
Route::post('comments/{post}/update', [CommentController::class, 'update'])->name('comments.update');
Route::delete('comments/{post}/destroy', [CommentController::class, 'destroy'])->name('comments.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
