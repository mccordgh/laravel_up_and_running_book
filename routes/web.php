<?php

Route::get('/', 'HomeController@index');
Route::get('about', 'AboutController@index');
Route::get('contact', 'ContactController@index');

Route::post('greeting', 'GreetingController@create');
