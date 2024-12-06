<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Chat\ChatController;
use App\Http\Controllers\Post\PostController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/post', [PostController::class , 'index'])->name('post.get');
Route::resource('posts', PostController::class);
Route::resource('chats', ChatController::class);
