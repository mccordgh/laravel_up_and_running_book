<?php

Route::get('/', 'HomeController@index');
Route::get('about', 'AboutController@index');
Route::get('about/{number}', 'AboutController@index');
Route::get('contact', 'ContactController@index');

Route::post('greeting', 'GreetingController@create');
Route::post('picture', 'PictureController@create');
Route::post('errors', 'ErrorsController@create');
