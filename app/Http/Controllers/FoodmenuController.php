<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foodmenu;
use App\ConventionHall;
use Auth;

class FoodmenuController extends Controller
{
    //


    public function index(){

    }

    public function create(){
        return view('foodmenus.create');

    }

 
    public function show($id)
    {
        $foodmenu=Foodmenu::find($id);

        return view('foodmenus.show', compact('foodmenu'));
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

        $foodmenu=Foodmenu::find($id);


        return view('foodmenus.edit', compact('foodmenu'));
    }


    public function store(Request $request)
    {
        $conventionhall = ConventionHall::where('manager_id', Auth::user()->id)->first();
        /*dd($conventionhall);*/
        $foodmenu = new Foodmenu;
        $foodmenu->name = $request->name;
        $foodmenu->food_type = $request->food_type;
        $foodmenu->item_details = $request->item_details;
        $foodmenu->price_per_head = $request->price_per_head;
        $foodmenu->convention_hall_id = $conventionhall->id;

        $foodmenu->save();
        
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
        $foodmenu = Foodmenu::find($request->id);
        
        $foodmenu->name = $request->name;
        $foodmenu->food_type = $request->food_type;
        $foodmenu->item_details = $request->item_details;
        $foodmenu->price_per_head = $request->price_per_head;
        $foodmenu->save();


        //set flash data with success message
        // redirect with flash data to posts.show
        return "OK";
    }

    public function destroy($id)
    {
        $foodmenu = Foodmenu::find($id);
        $foodmenu->delete();
        return "OK";
        /*return redirect()->route('posts.index');*/
    }

}
