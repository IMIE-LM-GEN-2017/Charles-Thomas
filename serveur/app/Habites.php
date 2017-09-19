<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habites extends Model
{
    public function users(){
        return $this->hasMany('App\Users');
    }

    public function pays(){
        return $this->hasMany('App\Pays');
    }
}
