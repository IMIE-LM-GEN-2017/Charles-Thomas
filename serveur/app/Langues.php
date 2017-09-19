<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Langues extends Model
{
    protected $fillable = [
        'langue',
    ];
    public function parles(){
        return $this->belongsTo('App\Parles');
    }
    public function user(){
        return $this->hasMany('App\Users');
    }
}