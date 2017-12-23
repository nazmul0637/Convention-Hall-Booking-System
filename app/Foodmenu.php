<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foodmenu extends Model
{

	protected $table = 'foodmenus';

    public function conventionhall(){

    	return $this->belongsTo('App\ConventionHall');
    }

    public function reservation(){

        return $this->hasOne('App\Reservation');
    }

}
