<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anomalie extends Model
{
    protected $table = "anomalies";

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function logiciel(){
        return $this->belongsTo('App\Logiciel');
    }

    public function type_anomalie(){
        return $this->belongsTo('App\Type_Anomalie');
    }

    public function etat_anomalies(){
        return $this->belongsTo('App\Etat_Anomalie');
    }
}
