<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sensor extends Model
{
    protected $table = 'sensors';

    protected $fillable = [
        'dustDensity', 'calcVoltage', 'voMeasured'
    ];
}
