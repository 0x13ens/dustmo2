<?php

namespace App\Http\Controllers;

use App\sensor;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sensor = new Sensor;
        $sensor->voMeasured =   $request->get("voMeasured", "n/a") . '°C, ' .
        $sensor->calcVoltage =  $request->get("calcVoltage", "n/a") . '°C, ' .
        $sensor->dustDensity =  $request->get("dustDensity", "n/a");
        $sensor->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\sensor  $sensor
     * @return \Illuminate\Http\Response
     */
    public function show(sensor $sensor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sensor  $sensor
     * @return \Illuminate\Http\Response
     */
    public function edit(sensor $sensor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sensor  $sensor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sensor $sensor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sensor  $sensor
     * @return \Illuminate\Http\Response
     */
    public function destroy(sensor $sensor)
    {
        //
    }
}
