<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parles extends Model
{
    public function users(){
        return $this->hasMany('App\Destination');
    }

    public function langues(){
        return $this->belongsTo('App\Langues');
    }
}
