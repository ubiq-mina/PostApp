<?php

namespace PostApp;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post()
    {
        return $this->belongsTo('PostApp\Post');
    }

    public function user()
    {
        return $this->belongsTo('PostApp\User');
    }
}
