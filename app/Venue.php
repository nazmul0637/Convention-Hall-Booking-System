<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{

    public function conventionhall(){

    	return $this->belongsTo('App\ConventionHall');
    }

    public function reservations(){
    	return $this->hasMany(Reservation::class);
    }

}
