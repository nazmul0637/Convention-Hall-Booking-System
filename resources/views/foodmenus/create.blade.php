@extends('app_layout.layout')

@section('title', '|ManageerDashboard')
@section('content')

	<div class="container">
		<section>
			<form class="form-horizontal" action="{{route('foodmenu.store')}}" method="POST">
				{!! csrf_field() !!}

			  <div class="form-group">
			    <label for="name" class="col-sm-2 control-label">Menu name</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="name" name="name" placeholder="name">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="food_type" class="col-sm-2 control-label">Menu type</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="food_type" name="food_type" placeholder="menu type">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="item_details" class="col-sm-2 control-label">Item details</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="item_details" name="item_details" placeholder="item details">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="price_per_head" class="col-sm-2 control-label">Price per head</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="price_per_head" name="price_per_head" placeholder="price per head">
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
