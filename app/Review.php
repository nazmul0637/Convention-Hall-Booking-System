<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    public function user(){

    	return $this->belongsTo('App\User');
    }

    public function conventionhall(){

    	return $this->belongsTo('App\ConventionHall');
    }

}
