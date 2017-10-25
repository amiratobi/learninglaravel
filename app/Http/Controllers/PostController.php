<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()	
    {
    	return view('posts.index');
    }

    public function details(Post $post)
    {
    	return view('posts.details', compact('post'));
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store()
    {
    	//dd(request()->all());
    	$this->validate(request(), [
    		"title" => "required",
    		"body" => "required"
    	]);

    	Post::create(request(['title','body']));
    	return redirect('/posts');
    }
}
