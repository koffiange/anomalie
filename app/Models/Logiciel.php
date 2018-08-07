<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logiciel extends Model
{
    protected $table='logiciels';

    public function anomalies(){
        return $this->hasMany('App\Anomalie');
    }
}
