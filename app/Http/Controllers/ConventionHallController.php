<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ConventionHall;
use App\User;
use App\Venue;
use App\Foodmenu;
use App\Map;

class ConventionHallController extends Controller
{
    //

    
    public function index(){

        $conventionhalls = ConventionHall::orderby('id', 'desc')->paginate(10);
        return view('conventionhalls.index',compact('conventionhalls'));

    }

    public function create(){
        return view('conventionhalls.create');

    }

 
    public function show($id)
    {
        $conventionhall=ConventionHall::find($id);
        $venue= Venue::where('convention_hall_id', $conventionhall->id)->first();
        $foodmenu= Foodmenu::where('convention_hall_id', $conventionhall->id)->first();
        $map= Map::where('convention_hall_id', $conventionhall->id)->first();

        return view('conventionhalls.show', compact('conventionhall','venue','foodmenu','map'));
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

        $conventionhall=ConventionHall::find($id);
        $user = User::find($conventionhall->manager_id);


        return view('conventionhalls.edit', compact('conventionhall', 'user'));
    }


    public function store(Request $request)
    {

        /*$this->validate($request,array(
            'name' => 'required',
            'address' => 'nullable|string|unique:convention_halls',
            'description' => 'nullable|string',
            'contact' => 'nullable|string|unique:convention_halls|max:14',
            'hall' => 'nullable|integer',
            'menu' => 'nullable|integer',
            'payment' => 'nullable|string',
            'terms' => 'nullable|string',
            'notes' => 'nullable|string',


            'managername'=>'required|string',
            'email'=>'required|unique:users',
            'password'=>'required',
            'role'=>'required',
            'phone'=>'required|max:14|unique:users',
        ));*/

        $user = new User;
        $user->name = $request->managername;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->phone = $request->phone;

        $user->save();


        $conventionhall = new ConventionHall;
        $conventionhall->name = $request->name;
        $conventionhall->address = $request->address;
        $conventionhall->description = $request->description;
        $conventionhall->contact = $request->contact;
        $conventionhall->Num_of_hall = $request->hall;
        $conventionhall->Num_of_food_type = $request->menu;
        $conventionhall->payment = $request->payment;
        $conventionhall->terms_and_conditions = $request->terms;
        $conventionhall->note = $request->notes;
        $conventionhall->manager_id = $user->id;

        $conventionhall->save();
        
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
        $conventionhall = ConventionHall::find($request->id);
        $user = User::find($conventionhall->manager_id);
        
        $user->name = $request->managername;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->phone = $request->phone;

        $user->save();

        $conventionhall->name = $request->name;
        $conventionhall->address = $request->address;
        $conventionhall->description = $request->description;
        $conventionhall->contact = $request->contact;
        $conventionhall->Num_of_hall = $request->hall;
        $conventionhall->Num_of_food_type = $request->menu;
        $conventionhall->payment = $request->payment;
        $conventionhall->terms_and_conditions = $request->terms;
        $conventionhall->note = $request->notes;
        $conventionhall->manager_id = $user->id;

        $conventionhall->save();

        //set flash data with success message
        // redirect with flash data to posts.show
        return "OK";
    }

    public function destroy($id)
    {
        $conventionhall = ConventionHall::find($id);
        $user = User::find($conventionhall->manager_id);
        $conventionhall->delete();
        $user->delete();
        return "OK";
        /*return redirect()->route('posts.index');*/
    }


}
