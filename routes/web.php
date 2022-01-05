<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

Route::get('/', [PostController::class, 'index'])->name('home');
Route::resource('posts', PostController::class);

Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::get('signup', [RegisterController::class, 'create']);
Route::get('signin', [SessionsController::class, 'create']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Admin Section
Route::middleware(['can:admin'])->group(function () {
    Route::resource('admin/posts', AdminPostController::class)->except('show');
    // Route::get('admin/posts', [AdminPostController::class,'index']);
    // Route::post('admin/posts' ,[AdminPostController::class,'store']);
    // Route::get('admin/posts/create', [AdminPostController::class,'create']);
    // Route::get('admin/posts/{post}/edit', [AdminPostController::class,'edit']);
    // Route::patch('admin/posts/{post}', [AdminPostController::class,'update']);
    // Route::delete('admin/posts/{post}', [AdminPostController::class,'destroy']);    
});

