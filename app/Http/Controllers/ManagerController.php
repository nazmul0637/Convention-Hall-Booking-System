<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    //

    public function manager(){

        return view('manager.manager_dash');
    }
}
