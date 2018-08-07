<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_Anomalie extends Model
{
    protected $table='type_anomalies';

    public function anomalies(){
        return $this->hasMany('App\Anomalie');
    }
}
