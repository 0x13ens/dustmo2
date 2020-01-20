<?php

Route::resource('weather', 'WeatherController');
Route::resource('sensors', 'SensorController'))->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
