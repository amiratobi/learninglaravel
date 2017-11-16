<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth')->except(['index', 'details']);
    }

    public function index()	
    {
        $dt = Carbon::now();
        Carbon::setToStringFormat('Y-m-d \TH:i:s');
        $dt->toDateTimeString();

        $posts = Post::latest()
                ->filter(request(['month', 'year']))
                ->get();

        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
                    ->groupBy('year', 'month')
                    ->orderBy('created_at', 'desc')
                    ->get();
    	
        return view('posts.index',compact('posts', 'archives', 'dt'));

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

    	auth()->user()->publish(
            new Post(request([ 'title', 'body']))
        );

    	return redirect('/posts');
    }
}
