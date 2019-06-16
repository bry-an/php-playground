<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class profilesController extends Controller
{

    public function index(\App\User $user)
    {
        // references home.blade.php, laravel handles this for us since 'home' is inside /views
        return view('profiles.index', compact('user'));
    }
    public function edit(\App\User $user)
    {
        $this->authorize('update', $user->profile);

        return view('profiles.edit', compact('user'));
    }
    public function update(\App\User $user)
    {
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => 'nullable',
        ]);


        if (request('image')) {
            $imagePath = request('image')->store('profile', 'public'); // first argument is dir second is driver to use (could use s3)

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();
            $imageArray = ['image' => $imagePath];
        }


        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));

        return redirect("/profile/{$user->id}");
    }
}
