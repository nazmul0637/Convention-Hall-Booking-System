<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venue;
use App\ConventionHall;
use Auth;

class VenueController extends Controller
{
    //

    public function index(){

    }

    public function create(){
        return view('venues.create');

    }

 
    public function show($id)
    {
        $venue= Venue::find($id);

        return view('venues.show', compact('venue'));
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

        $venue=Venue::find($id);


        return view('venues.edit', compact('venue'));
    }


    public function store(Request $request)
    {
        $conventionhall = ConventionHall::where('manager_id', Auth::user()->id)->first();
        /*dd($conventionhall);*/
        $venue = new Venue;
        $venue->name = $request->name;
        $venue->size = $request->size;
        $venue->capacity = $request->capacity;
        $venue->facilities = $request->facilities;
        $venue->convention_hall_id = $conventionhall->id;

        $venue->save();
        
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
        $venue = Venue::find($request->id);
        
        $venue->name = $request->name;
        $venue->size = $request->size;
        $venue->capacity = $request->capacity;
        $venue->facilities = $request->facilities;
        $venue->save();


        //set flash data with success message
        // redirect with flash data to posts.show
        return "OK";
    }

    public function destroy($id)
    {
        $venue = Venue::find($id);
        $venue->delete();
        return "OK";
        /*return redirect()->route('posts.index');*/
    }


}
