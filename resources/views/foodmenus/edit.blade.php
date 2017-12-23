@extends('app_layout.layout')

@section('title', '|AdminDashboard')
@section('content')

	<div class="container">
		<section>
			<form class="form-horizontal" action="{{route('foodmenu.update')}}" method="POST">
				{!! csrf_field() !!}
				<input type="hidden" name="id" value={{$foodmenu->id}}>


			  <div class="form-group">
			    <label for="name" class="col-sm-2 control-label">Menu name</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="name" name="name" value="{{$foodmenu->name}}">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="food_type" class="col-sm-2 control-label">Menu type</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="food_type" name="food_type" value="{{$foodmenu->food_type}}">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="item_details" class="col-sm-2 control-label">Item details</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="item_details" name="item_details" value="{{$foodmenu->item_details}}">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="price_per_head" class="col-sm-2 control-label">Price per head</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="price_per_head" name="price_per_head" value="{{$foodmenu->price_per_head}}">
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
