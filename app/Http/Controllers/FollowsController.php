<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\ProfileNumbersChange;

class FollowsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(\App\User $user)
    {
        $targetUser = auth()->user();

        // event(new ProfileNumbersChange($targetUser));
        return auth()->user()->following()->toggle($user->profile);
    }
}
