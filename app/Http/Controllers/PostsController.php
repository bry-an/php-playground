<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create()
    {
        return view('posts.create'); // can use period or slash to access files w/i a dir
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image']
        ]);

        // get authenticated user
        auth()->user()->posts()->create($data); // posts() is available under user b/c association

        \App\Post::create($data);

        dd(request()->all());
    }
}
