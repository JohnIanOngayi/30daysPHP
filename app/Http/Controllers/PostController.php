<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($postId)
    {
        $post = Post::find($postId);

        return view(view: 'post', mergeData: compact('post'));
    }
}
