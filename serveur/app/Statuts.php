<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Statuts extends Model
{
    protected $fillable = [
        'type',
    ];
    public function voyages(){
        return $this->belongsTo('App\Voyages');
    }
}