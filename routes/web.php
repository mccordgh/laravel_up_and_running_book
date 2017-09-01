<?php

Route::get('/', function () {
    return redirect('home');
});

Route::get('home', 'HomeController@index');
Route::get('home/{food}', 'HomeController@index');
Route::get('about', 'AboutController@index');
Route::get('about/{number}', 'AboutController@index');
Route::get('contact', 'ContactController@index');
Route::get('roster', 'RosterController@index');

Route::post('greeting', 'GreetingController@create');
Route::post('picture', 'PictureController@create');
Route::post('errors', 'ErrorsController@create');
