@extends('app_layout.layout')

@section('title', '|AdminDashboard')
@section('content')

	<div class="container">
		<section>
			<form class="form-horizontal" action="{{route('venue.update')}}" method="POST">
				{!! csrf_field() !!}
				<input type="hidden" name="id" value={{$venue->id}}>


			  <form class="form-horizontal" action="{{route('venue.store')}}" method="POST">
				{!! csrf_field() !!}

			  <div class="form-group">
			    <label for="name" class="col-sm-2 control-label">Venue name</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="name" name="name" value="{{$venue->name}}">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="size" class="col-sm-2 control-label">Venue size</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="size" name="size" value="{{$venue->size}}">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="capacity" class="col-sm-2 control-label">Venue capacity</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="capacity" name="capacity" value="{{$venue->capacity}}">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="facilities" class="col-sm-2 control-label">Facilities</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="facilities" name="facilities" value="{{$venue->facilities}}">
			    </div>
			  </div>

			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-info">Submit</button>
			    </div>
			  </div>
			</form>
		</section>
	</div>

@endsection
@section('scrollup')

    @include('home_pages.scrollup')

@endsection
