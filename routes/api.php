<?php

use Illuminate\Http\Request;

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

$router->post('sensor','SensorController@createSensor');   //for creating Sensor
$router->get('sensor/{id}','SensorController@updateSensor'); //for updating Sensor
$router->post('sensor/{id}','SensorController@deleteSensor');  // for deleting Sensor
$router->get('sensor','SensorController@index'); // for retrieving Sensor

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// This post link hits the sensorController Store method and hopefully stores our sensor values in the database
Route::post('sensors','SensorController@store');

