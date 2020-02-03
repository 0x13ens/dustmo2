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

// This post link hits the sensorController Store method and hopefully stores our sensor values in the database
Route::post('sensors','SensorController@store');
Route::get('sensors', 'SensorController@getSensors');

// This post link hits the sensorController Store method and creates a user in our database
Route::post('createuser', 'UserController@create');

// This post link hits the UserController login method and hopefully logs our user in
Route::get('userlogin', 'UserController@login');

Route::prefix('v1')->group(function(){
    Route::post('login', 'Api\AuthController@login');
    Route::post('register', 'Api\AuthController@register');
    Route::group(['middleware' => 'auth:api'], function() {
        Route::get('getUser', 'Api\AuthController@getUser');
    });
});
