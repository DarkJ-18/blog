<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', HomeController::class);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class, 'show']);

Route::get('prueba', function () {
   $post = new Post;
   $post->title = 'Mi primer post 1';
   $post->content = 'Contenido de mi primer post 1';
   $post->category = 'Categoria de prueba 1';
   $post->save();
   return $post;
});