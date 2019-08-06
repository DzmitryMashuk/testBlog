<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        return view('post/index', ['posts' => Post::all()]);
    }

    public function show(Post $post)
    {
        return view('post/show', ['post' => $post]);
    }

    public function create()
    {
        return view('post/create');
    }

    public function store()
    {
        $this->validate(request(), [
            'author'  => 'required|min:3',
            'title'   => 'required',
            'message' => 'required',
        ]);

        $slug = preg_replace('/\s+/', '-', request('title'));

        Post::create(array_merge(request(['author', 'title', 'slug', 'message']), ['slug' => $slug]));

        return redirect('/post');
    }

    public function edit(Post $post)
    {
        return view('post/edit', ['post' => $post]);
    }

    public function update(Post $post)
    {
        $this->validate(request(), $post->rules());

        $slug = preg_replace('/\s+/', '-', request('title'));

        $post->update(array_merge(request($post->rules()), ['slug' => $slug]));

        return redirect('/post');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/post');
    }
}
