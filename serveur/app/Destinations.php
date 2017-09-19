<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destinations extends Model
{
    public function users(){
        return $this->hasMany('App\Users');
    }

    public function voyages(){
        return $this->hasMany('App\Voyages');
    }
}
