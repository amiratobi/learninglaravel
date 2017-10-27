<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Post $post)
    {
    	$this->validate(request(), [
    		'body' => 'required|max:140'
    	]);

    	$post->addComment(request('body'));

    	return back();
    }
}
