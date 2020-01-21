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

Route::post('sensor','SensorController@createSensor');   //for creating Sensor
Route::get('sensor/{id}','SensorController@updateSensor'); //for updating Sensor
Route::post('sensor/{id}','SensorController@deleteSensor');  // for deleting Sensor
Route::('sensor','SensorController@index'); // for retrieving Sensor

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// This post link hits the sensorController Store method and hopefully stores our sensor values in the database
Route::post('sensors','SensorController@store');

