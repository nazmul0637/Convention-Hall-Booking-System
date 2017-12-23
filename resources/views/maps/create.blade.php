@extends('app_layout.layout')

@section('title', '|ManageerDashboard')
@section('content')

	<div class="container">
		<section>
			<form class="form-horizontal" action="{{route('map.store')}}" method="POST">
				{!! csrf_field() !!}

			  <div class="form-group">
			    <label for="latitude" class="col-sm-2 control-label">Latitude</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="latitude" name="latitude" placeholder="latitude">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="longitude" class="col-sm-2 control-label">Longitude</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="longitude" name="longitude" placeholder="longitude">
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
