<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// This post link hits the sensorController Store method and hopefully stores our sensor values in the database
Route::post('sensors','SensorController@store');

// This post link hits the sensorController Store method and hopefully stores our sensor values in the database
Route::post('users', 'UserController@store');
