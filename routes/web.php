<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

Route::get('/', [PostController::class, 'index'])->name('home');
Route::resource('posts', PostController::class);

Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
