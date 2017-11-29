<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{

	public function __construct()
	{

		$this->middleware('guest')->except(['destroy']);

	}

    public function create()
    {
    	return view('sessions.create');
    }

    public function destroy()
    {
    	auth()->logout();

    	return redirect('/login');
    }

    public function store()
    {

    	$this->validate(request(), [

    		'email' => 'required',

    		'password' => 'required'

    	]);


    	if (! auth()->attempt(request(['email','password'])))
    	{

    		return back()->withErrors([]);

		}
		$message = 'Welcome Back '.auth()->user()->name; 

		session()->flash('message', $message);
    	return redirect('/posts');

    }
}
