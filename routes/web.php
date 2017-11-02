<?php

Route::get('/', function () {
    
    $name = "Tobi";
    return view('welcome', compact('name'));

});

Route::get('hobbies', 'HobbiesController@index');

Route::get('hobbies/{hobby}', 'HobbiesController@details');

Route::get('posts', 'PostController@index');

Route::get('posts/create', 'PostController@create');

Route::post('posts', 'PostController@store');

Route::get('posts/{post}', 'PostController@details');

Route::post('posts/{post}/comments', 'CommentController@store');

Route::get('register', 'RegistrationController@create');

Route::post('register', 'RegistrationController@store');

Route::get('login', 'SessionController@create');

Route::get('logout', 'SessionController@destroy');


