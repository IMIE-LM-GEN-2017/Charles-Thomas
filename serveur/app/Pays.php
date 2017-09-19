<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Pays extends Model
{
    protected $fillable = [
        'nom', 'nationalites',
    ];
    public function destination(){
        return $this->hasMany('App\Destination');
    }
    public function habite(){
        return $this->hasMany('App\Habite');
    }
}