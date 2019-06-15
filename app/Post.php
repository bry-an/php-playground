<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = []; // it's okay, Laravel, don't guard any form submissions
    // we're handling this by being descriptive in the store()
    // in the PostsController

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
