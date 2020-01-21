<?php

namespace App\Http\Controllers;

use DB;
use App\sensor;
use App\room;
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
        $sensors = Sensor::orderBy('id', 'DESC')->paginate(50);
        return view('sensor.index', compact('sensors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sensors.create');
    }

    public function createSensor(Request $request){
        $sensor = Sensor::create($request->all());
        return response()->json($sensor);
    }

    public function updateProduct(Request $request, $id){
        $sensor  = DB::table('sensors')->where('pid',$request->input('pid'))->get();
           $sensor->name = $request->input('name');
           $sensor->price = $request->input('price');
           $sensor->description = $request->input('description');
           $sensor->save();
           $response["sensors"] = $sensor;
           $response["success"] = 1;
        return response()->json($response);
    }

    public function deleteSensor($id){
        $product  = DB::table('sensors')->where('pid',$request->input('pid'))->get();
        $product->delete();
        return response()->json('Removed successfully.');
    }

    public function index(){
        $sensors  = Sensor::all();
           $response["sensors"] = $sensors;
           $response["success"] = 1;
        return response()->json($response);
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
        $sensor->voMeasured     =  $request->get('voMeasured', "n/a");
        $sensor->calcVoltage    =  $request->get('calcVoltage', "n/a");
        $sensor->dustDensity    =  $request->get('dustDensity', "n/a");
        $sensor->temperature    =  $request->get('temperature', "n/a");
        $sensor->pressure       =  $request->get('pressure', "n/a");
        $sensor->altitude       =  $request->get('altitude', "n/a");
        $sensor->humidity       =  $request->get('humidity', "n/a");
        $sensor->c02            =  $request->get('c02', "n/a");

        $sensor->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\sensor  $sensor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sensors = Sensor::orderBy('id', 'DESC')->paginate(50);
        $temperature = Sensor::orderby('id', 'desc')->first();
        $pressure = Sensor::orderby('id', 'desc')->first();
        $altitude = Sensor::orderby('id', 'desc')->first();
        $humidity = Sensor::orderby('id', 'desc')->first();
        return view('sensor.show', compact('sensors', 'temperature', 'pressure', 'altitude', 'humidity'));
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
