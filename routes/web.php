<?php

Route::get('/', function () {
    
    $name = "Tobi";
    return view('welcome', compact('name'));

});

Route::get('hobbies', 'HobbiesController@index');

Route::get('hobbies/{hobby}', 'HobbiesController@details');

Route::get('posts', 'PostController@index');

Route::get('posts/{post}', 'PostController@details');
