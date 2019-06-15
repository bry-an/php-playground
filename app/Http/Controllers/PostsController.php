<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    public function __construct() // this is constructor
    {
        $this->middleware('auth');
        // every instance of controller has auth middleware, every function
        // (route) below will require authorization

    }
    public function create()
    {
        return view('posts.create'); // can use period or slash to access files w/i a dir
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image'] // 'image' will be instance of UploadedFile
        ]);

        $imagePath = request('image')->store('uploads', 'public'); // first argument is dir second is driver to use (could use s3)

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();
        // get authenticated user
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath
        ]); // posts() is available under user b/c relationship
        // Laravel will add user id because it knows about the relationship
        // \App\Post::create($data); can't use this since user isn't authenticated

        return redirect('/profile/' . auth()->user()->id);
    }
    public function show(\App\Post $post) // have access to $post in show.blade.php
    {
        return view('posts.show', compact('post'));
    }
}
