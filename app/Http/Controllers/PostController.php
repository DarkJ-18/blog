<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();

        return view('posts.index', compact('posts'));
    }
    public function create()
    {

        return view('posts.create');
    }

    public function store(Request $request)
    {
        //     $request->validate([
        //         'title' => 'required',
        //         'content' => 'required',
        //     ]);
        $post = new Post();

        $post->title = $request->title;
        $post->category = $request->category;
        $post->content = $request->content;

        $post->save();
        return redirect('/posts');
    }

    public function show($post)
    {
        $post = Post::find($post);

        return view('posts.show', ['post' => $post]);
    }

    public function edit($post)
    {
        $post = Post::find($post);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $post)
    {
        $post = Post::find($post);

        $post->title = $request->title;
        $post->category = $request->category;
        $post->content = $request->content;

        $post->save();
        return redirect("/posts/{$post->id}");	
    }

    public function destroy($post)
    {
        $post = Post::find($post);
        
        $post->delete();
        return redirect('/posts');
    }
}
