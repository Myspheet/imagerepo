<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //

    protected $fillable = ['image', 'title', 'user_id', 'public'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
