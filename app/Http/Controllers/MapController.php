<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Map;
use App\ConventionHall;
use Auth;

class MapController extends Controller
{
    //

    public function index(){

    }

    public function create(){
        return view('maps.create');

    }

 
    public function show($id)
    {
        $map= Map::find($id);

        return view('map.show', compact('map'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dd($id);

        $map=Map::find($id);


        return view('maps.edit', compact('map'));
    }


    public function store(Request $request)
    {
        $conventionhall = ConventionHall::where('manager_id', Auth::user()->id)->first();
        /*dd($conventionhall);*/
        $map = new Map;
        $map->latitude = $request->latitude;
        $map->longitude = $request->longitude;
        $map->convention_hall_id = $conventionhall->id;

        $map->save();
        
        return "hi";
        //return redirect()->route('/');
    }

    public function update(Request $request)
    {
        //validate the data
        /*$this->validate($request, array(
            'name' => 'required',
            'address' => 'nullable|string|unique',
            'description' => 'nullable|string',
            'contact' => 'nullable|string|unique|max:14',
            'Num_of_hall' => 'nullable|integer',
            'Num_of_food_type' => 'nullable|integer',
            'payment' => 'nullable|string',
            'terms_and_conditions' => 'nullable|string',
            'note' => 'nullable|string',


            'name'=>'required|string',
            'email'=>'required|unique',
            'password'=>'required',
            'role'=>'required',
            'phone'=>'required|max:14|unique',

        ));*/

        //Save data to the database
        $map = Map::find($request->id);
        
        $map->latitude = $request->latitude;
        $map->longitude = $request->longitude;
        $map->save();


        //set flash data with success message
        // redirect with flash data to posts.show
        return "OK";
    }

    public function destroy($id)
    {
        $map = Map::find($id);
        $map->delete();
        return "OK";
        /*return redirect()->route('posts.index');*/
    }

}
