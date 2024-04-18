<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }
    public function create()
    {
        return view('posts.create');
    }

    public function show($post)
    {
        return view('posts.show', ['post' => $post]);
    }
}
