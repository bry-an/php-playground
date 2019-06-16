<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = []; // use to prevent fillable error

    public function profileImage()
    {
        $imagePath = ($this->image) ? '/storage/' . $this->image : 'profile/NTuv3vpkRm24UiSAto6LpYrbhnPyP8mYF9qyERde.png';
        return '/storage/' . $imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
