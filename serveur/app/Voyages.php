<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Voyages extends Model
{
    protected $fillable = [
        'pays', 'ville', 'date_depart','date_arrivee', 'type',
    ];
    public function status(){
        return $this->hasMany('App\Status');
    }
    public function destinations(){
        return $this->hasMany('App\Destinations');
    }
}
