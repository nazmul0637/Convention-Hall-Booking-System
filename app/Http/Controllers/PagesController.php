<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ConventionHall;

class PagesController extends Controller
{
    //


    public function index(){

        return view('index');
    }
    

    public function Conventionindex(){
        #processw variable data or params
        #talk to the model
        #receive from the model
        #compile or process data from the model if needed
        #pass that data to the correct view

        return view('conventionhalls.show');
    }

    public function Conventioncreate(){
        #processw variable data or params
        #talk to the model
        #receive from the model
        #compile or process data from the model if needed
        #pass that data to the correct view

        return view('conventionhalls.create');
    }


}
