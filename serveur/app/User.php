<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pseudo', 'email', 'password','nom', 'prenom', 'sexe', 'date_naissance','note', 'disponiblite', 'nounce'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function destination(){
        return $this->hasMany('App\Destination');
    }

    public function habite(){
        return $this->hasMany('App\Habite', 'id_users');
    }

    public function parle(){
        return $this->hasMany('App\Parle');
    }
}
