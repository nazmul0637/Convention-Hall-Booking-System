<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    public function conventionhall(){

    	return $this->belongsTo('App\ConventionHall');
    }

}
