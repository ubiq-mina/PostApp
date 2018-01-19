<?php

namespace PostApp;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Get the user that made the post.
     */
    public function user()
    {
        return $this->belongsTo('PostApp\User');
    }

    public function comments()
    {
        return $this->hasMany('PostApp\Comment');
    }
}
