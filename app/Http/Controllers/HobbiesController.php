<?php

namespace App\Http\Controllers;

use App\Hobby;
use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index()
    {
    	//$hobbies = DB::table('hobbies')->get();
		$hobbies = Hobby::all();
	    //return $hobbies;
	    return view('hobbies.index', compact('hobbies'));
    }

    public function details(Hobby $hobby)
    {
    	//$hobby = Hobby::find($id);
		//dd($hobbies);
		return view('hobbies.details', compact('hobby'));
    }
}
