<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ConventionHall;

class AdminController extends Controller
{
    //

    public function admin(){
       $conventions = ConventionHall::all();

        return view('admin.admin_dash', compact('conventions'));
    }
}
