<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConventionHall extends Model
{

    protected $table = 'convention_halls';

    public function user(){

    	return $this->belongsTo('App\User');
    }

    public function map(){
    	return $this->hasOne('App\Map');
    }

    public function venues(){
    	return $this->hasMany(Venue::class);
    }

    public function foodmenu(){
    	return $this->hasMany('App\Foodmenu');
    }

    public function photo(){
    	return $this->hasMany('App\Photo');
    }

    public function review(){
    	return $this->hasMany('App\Review');
    }
}
