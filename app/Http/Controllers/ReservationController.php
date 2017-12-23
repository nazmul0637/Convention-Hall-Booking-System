<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\ConventionHall;
use App\Venue;
use App\Foodmenu;
use Auth;
use Session;

class ReservationController extends Controller
{
    //

    public function index(){
        $conventionhall = ConventionHall::where('manager_id', Auth::user()->id)->first();
        $venues = $conventionhall->venues;

        $reservations = null;

        foreach ($venues as $key => $venue) {

            $a = Reservation::where('venue_id', $venue->id)->get();

            if(count($a)>0){

                $reservations = (object) array_merge((array)$reservations, (array)$a);
            }

        }
        
        return view('reservations.index', compact('reservations'));
    }

    public function create($id){
        $conventionhall = ConventionHall::find($id);
        $venues = Venue::where('convention_hall_id', $conventionhall->id)->get();
        $foodmenus = Foodmenu::where('convention_hall_id', $conventionhall->id)->get();
        return view('reservations.create', compact('conventionhall', 'venues', 'foodmenus'));

    }

	public function show($id){
        $reservation= Reservation::find($id);

        return view('reservations.show', compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        //dd($id);

        $reservation=Reservation::find($id);


        return view('reservations.edit', compact('reservation'));
    }


    public function store(Request $request){

        $reservation = new Reservation;
        $reservation->total_guest = $request->total_guest;
        $reservation->total_amount = null;
        $reservation->reservation_date = $request->reservation_date;
        $reservation->reservation_time_slot = $request->reservation_time_slot;
        $reservation->payment_id = null;
        $reservation->approved = 0;
        $reservation->special_requirement = $request->sr;
        $reservation->venue_id = $request->venue_id;
        $reservation->foodmenu_id = $request->foodmenu;
        $reservation->user_id = Auth::user()->id;

        $reservation->save();

        Session::flash('flash_message','Reservation successfully added.');
        
        return redirect('/home');
    }

    public function update(Request $request){
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
        $reservation = Reservation::find($request->id);
        
        $reservation->total_guest = $request->total_guest;
        $reservation->total_amount = $request->total_amount;
        $reservation->reservations_date = $request->reservations_date;
        $reservation->reservation_time_slot = $request->reservation_time_slot;
        $reservation->payment_id = $request->payment_id;
        $reservation->approved = $request->approved;
        $reservation->special_requirement = $request->special_requirement;
        $reservation->venue_id = $request->venue_id;
        $reservation->user_id = Auth::user()->id;
        $reservation->foodmenu_id = $request->foodmenu_id;

        $reservation->save();


        //set flash data with success message
        // redirect with flash data to posts.show
        return "OK";
    }

    public function destroy($id){

        $reservation = Reservation::find($id);
        $reservation->delete();
        return "OK";
        /*return redirect()->route('posts.index');*/
    }


}
