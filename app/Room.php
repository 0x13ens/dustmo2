<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';

    public function sensors()
    {
        return $this->hasMany('App\sensor');
    }
}
