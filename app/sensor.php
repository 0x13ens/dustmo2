<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sensor extends Model
{
    protected $table = 'sensors';

    protected $fillable = [
        'dustDensity', 'calcVoltage', 'voMeasured', 'temperature', 'pressure', 'altitude', 'humidity'
    ];

    // A sensor belongs to a user

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
