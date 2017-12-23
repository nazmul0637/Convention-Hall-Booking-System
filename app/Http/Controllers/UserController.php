<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ConventionHall;

class UserController extends Controller
{
    //

    public function user(){
      $conventions = ConventionHall::all();

        return view('user.user_dashboard', compact('conventions'));
    }




}
