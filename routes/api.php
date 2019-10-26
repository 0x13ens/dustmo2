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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// This post link hits the sensorController Store method and hopefully stores our sensor values in the database
Route::post('/','SensorController@store');

Route::post('/', function (\Illuminate\Http\Request $request) {
    \Illuminate\Support\Facades\Storage::append("arduino-log.txt",
        "Time: " . now()->format("Y-m-d H:i:s") . ', ' .
        "voMeasured: " . $request->get("voMeasured", "n/a") . '°C, ' .
        "calcVoltage: " . $request->get("calcVoltage", "n/a") . '°C, ' .
        "dustDensity: " . $request->get("dustDensity", "n/a"));
});