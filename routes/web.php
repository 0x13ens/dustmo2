<?php

//this makes sure only registered users can access these routes //
Route::group(['middleware' => 'auth'], function()
{
    Route::resource('weather', 'WeatherController');
    Route::resource('sensors', 'SensorController');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
