@extends('app_layout.layout')

@section('title', '|UserDashboard')
@section('content')

	<div class="container">
		<section>
			<form class="form-horizontal" action="{{route('reservation.store')}}" method="POST">
				{!! csrf_field() !!}

			  <div class="form-group">
			    <label for="exampleFormControlSelect1" class="col-sm-2 control-label">Select Venue</label>
			    <div class="col-sm-10">
			    <select class="form-control" id="venue_id" name="venue_id">
			      @foreach($venues as $venue)
			      	<option value="{{$venue->id}}">{{$venue->name}}</option>
			      @endforeach
			    </select>
			    </div>
			   </div>
			   <div class="form-group">
			    <label for="exampleFormControlSelect1" class="col-sm-2 control-label">Food Menu</label>
			    <div class="col-sm-10">
			    <select class="form-control" id="foodmenu" name="foodmenu">
			      @foreach($foodmenus as $foodmenu)
			      	<option value="{{$foodmenu->id}}">{{$foodmenu->name}}</option>
			      @endforeach
			    </select>
			    </div>
			   </div>
			  <div class="form-group">
			    <label for="name" class="col-sm-2 control-label">Total guest</label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" id="total_guest" name="total_guest" placeholder="Total guest">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="name" class="col-sm-2 control-label">Reservation Date</label>
			    <div class="col-sm-10">
			      <input type="date" class="form-control" id="reservation_date" name="reservation_date" placeholder="Total guest">
			    </div>
			  </div>

			  <div class="form-group">
  			    <label for="exampleFormControlSelect1" class="col-sm-2 control-label">Time Slot</label>
  			    <div class="col-sm-10">
  			    <select class="form-control" id="reservation_time_slot" name="reservation_time_slot">
  			      	<option value="1">Noon</option>
  			      	<option value="2">Evening</option>
  			      	<option value="3">Full Day</option>
  			    </select>
  			    </div>
  			   </div>

			  <div class="form-group">
			    <label for="facilities" class="col-sm-2 control-label">Special Requirements</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="sr" name="sr" placeholder="facilities">
			    </div>
			  </div>

			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <input type="submit" class="btn btn-primary" value="Submit">
			    </div>
			  </div>
			</form>
		</section>
	</div>

@endsection
@section('scrollup')

    @include('home_pages.scrollup')

@endsection
