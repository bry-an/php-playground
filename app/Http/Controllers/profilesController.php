<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilesController extends Controller
{
    public function index($user)
    {
        $user = \App\User::find($user);
        // references home.blade.php, laravel handles this for us since 'home' is inside /views
        return view('home', [ // can pass second arg (an array) into view
            'user' => $user
        ]);
    }
}
