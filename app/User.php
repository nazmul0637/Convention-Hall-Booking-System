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
        'name', 'email', 'password','role','phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function convention_hall(){
        return $this->hasOne('App\ConventionHall');
    }

    public function venue(){
        return $this->hasMany('App\Reservation');
    }

    public function review(){
        return $this->hasMany('App\Review');
    }


    public function getUserId(){
        return $this->id;
    }



}
