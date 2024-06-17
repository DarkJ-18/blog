<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\User;

Route::get('/', HomeController::class);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/{post}', [PostController::class, 'show']);
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::put('/posts/{post}', [PostController::class, 'update']);
Route::delete('/posts/{post}', [PostController::class, 'destroy']);



//GET PARA MOSTRAR
//POST PARA GUARDAR
//PUT PARA ACTUALIZAR
//PATCH PARA ACTUALIZAR
//DELETE PARA ELIMINAR

Route::get('prueba', function () {
   // Crear un nuevo post
   // $user = User::find(1);
   // return $user->address; // Devuelve la dirección del usuario

   $post = Post::find(1);
   dd($post->is_active);



});
