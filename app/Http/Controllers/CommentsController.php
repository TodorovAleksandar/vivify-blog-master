<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store($postId)
    {
        $post = Post::find($postId);

        $this->validate(request(), Comment::STORE_RULES);

        $post->comments()->create(request()->all());

        return redirect()->route('single-post', ['id' => $postId]);
    }
}
