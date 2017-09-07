<?php

//Route::get('/', function () {
//    return redirect('dashboard');
//});

Route::get('test-dashboard', 'TestDashboardController@index');
Route::get('test-dashboard/{food}', 'TestDashboardController@index');
Route::get('about', 'AboutController@index');
Route::get('about/{number}', 'AboutController@index');
Route::get('contact', 'ContactController@index');
Route::get('roster', 'RosterController@index');

Route::post('greeting', 'GreetingController@create');
Route::post('picture', 'PictureController@create');
Route::post('errors', 'ErrorsController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
