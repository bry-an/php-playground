<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = []; // use to prevent fillable error
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
