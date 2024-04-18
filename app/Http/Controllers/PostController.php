<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return "Pagina principal de los posts";
    }

    public function show($post)
    {
        return "Mostrando el post con id: {$post}";
    }

    public function create()
    {
        return "Creando un post";
    }
}
