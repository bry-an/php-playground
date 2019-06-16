<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = []; // use to prevent fillable error

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/NTuv3vpkRm24UiSAto6LpYrbhnPyP8mYF9qyERde.png';
        return '/storage/' . $imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function followers()
    {
        return $this->belongsToMany((User::class));
    }
}
