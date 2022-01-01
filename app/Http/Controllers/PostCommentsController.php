<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostCommentsController extends Controller
{
    // add a comment to the given post.
    public function store(Post $post) {
        // validate
        request()->validate([
            'body' => 'required'
        ]);

        // perform an action
        $post->comments()->create([
            'user_id' => auth()->user()->id,
            'body' => request('body') 
        ]);

        return back();
    }
}
