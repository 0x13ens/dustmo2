<?php

Route::resource('sensors', 'SensorController');

Route::get('/app', function () {
    return view('app');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
