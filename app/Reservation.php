<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{

    public function venue(){

    	return $this->belongsTo('App\Venue');
    }

    public function user(){

    	return $this->belongsTo('App\User');
    }

    public function foodmenu(){
    	return $this->belongsTo('App\Foodmenu');
    }

}
