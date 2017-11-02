<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('registrations.create');
    }

    public function store()
    {
    	//Validate request
    	$this->Validate(request(), [
    		'name' => 'required',
    		'email' => 'required|email',
    		'password' => 'required|confirmed'
    	]);
    	//Create  User
    	$user = User::create(request(['name','email','password']));
    	//Sign User In
    	auth()->login($user);
    	//Return View
    	return redirect('/posts');
    }
}
