<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etat extends Model
{
    protected $table="etat";

    public function etat_anomalies(){
        return $this->hasMany('App\Etat_Anomalie');
    }
}
