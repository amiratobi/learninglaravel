<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationForm;
use App\User;
use App\Mail\Welcome;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('registrations.create');
    }

    public function store(RegistrationForm $form)
    {
		$form->persist();

		session()->flash('message', 'Welcome to MyApp');

		return redirect('/posts');		
    }
}
