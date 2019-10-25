<?php

Route::get('/app', function () {
    return view('app');
});

Route::get('/', function () {
    return view('welcome');
});
