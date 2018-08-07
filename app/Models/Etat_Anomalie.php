<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etat_Anomalie extends Model
{
    protected $table='etat_anomalie';

    public function anomalie (){
        return $this->belongsTo('App\Anomalie');
    }

    public function etat(){
        return $this->belongsTo('App\Etat');
    }
}
