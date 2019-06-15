<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilesController extends Controller
{
    public function index(\App\User $user)
    {
        // references home.blade.php, laravel handles this for us since 'home' is inside /views
        return view('profiles.index', compact('user'));
    }
    public function edit(\App\User $user)
    {
        return view('profiles.edit', compact('user'));
    }
    public function update(\App\User $user)
    {
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);

        $user->profile->update($data);

        return redirect("/profile/{$user->id}");
    }
}
