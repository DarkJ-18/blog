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
   // Crear un nuevo post
   /* $post = new Post;
   $post->title = 'Mi primer post 1';
   $post->content = 'Contenido de mi primer post 1';
   $post->category = 'Categoria de prueba 1';
   $post->save(); 
   return $post;*/

   // Actualizar un registriso
   /*  $post = Post::find(1);
   $post->category = 'Desarollo web';
   $post->save();
   return $post;  */

   //  Listar todos los registros
   /* $post = Post::where('id', '>=', 2)
       ->select('id', 'title')
       ->take(2)
       ->get();
       return $post;*/

   //Eliminar un registro
  /*  $post = Post::find(1);
   $post->delete();
   return "eliminado correctamente"; */
});
