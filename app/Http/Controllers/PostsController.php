<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('show', ['post' => $post]);
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        $this->validate(request(), [
            'author'  => 'required|min:3',
            'title'   => 'required',
            'message' => 'required',
        ]);

        $slug = preg_replace('/\s/', '-', request('title'));

        Post::create(array_merge(request(['author', 'title', 'slug', 'message']), ['slug' => $slug]));

        return redirect('/');
    }

    public function edit(Post $post)
    {
        return view('edit', ['post' => $post]);
    }

    public function update(Post $post)
    {
        $this->validate(request(), [
            'author'  => 'required|min:3',
            'title'   => 'required',
            'message' => 'required',
        ]);

        $slug = preg_replace('/\s/', '-', request('title'));

        $post->update(array_merge(request(['author', 'title', 'slug', 'message']), ['slug' => $slug]));

        return redirect('/');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/');
    }
}
