<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{

    public function conventionhall(){

    	return $this->belongsTo('App\ConventionHall');
    }

}
