<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = ['id'];

    const STORE_RULES = [
        'author' => 'required | string',
        'text' => 'required | min:15'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
