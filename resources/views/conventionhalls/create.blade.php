@extends('app_layout.layout')

@section('title', '|AdminDashboard')
@section('content')

	<div class="container">
		<section>
			<form class="form-horizontal" action="{{route('convention.store')}}" method="POST">
				{!! csrf_field() !!}
			  <div class="form-group">
			    <label for="name" class="col-sm-2 control-label">Name</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="name" name="name" placeholder="name">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="address" class="col-sm-2 control-label">Address</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="address" name="address" placeholder="address">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="description" class="col-sm-2 control-label">Description</label>
			    <div class="col-sm-10">
			      <textarea type="text" class="form-control" id="description" name="description" placeholder="description"></textarea>
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="contact" class="col-sm-2 control-label">Contact</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="contact" name="contact" placeholder="contact">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="hall" class="col-sm-2 control-label">Number of Halls/Venues</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="hall" name="hall" placeholder="Number of Halls">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="menu" class="col-sm-2 control-label">Number of Food Menu</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="menu" name="menu" placeholder="menu">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="Payment" class="col-sm-2 control-label">Payment</label>
			    <div class="col-sm-10">
			      <textarea type="text" class="form-control" id="payment" name="payment" placeholder="payment"></textarea>
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="terms" class="col-sm-2 control-label">Terms and Conditions</label>
			    <div class="col-sm-10">
			      <textarea type="text" class="form-control" id="terms" name="terms" placeholder="terms and conditions"></textarea>
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="notes" class="col-sm-2 control-label">Notes</label>
			    <div class="col-sm-10">
			      <textarea type="text" class="form-control" id="notes" name="notes" placeholder="notes"></textarea>
			    </div>
			  </div>

			 <!--  <div class="form-group">
			   <label for="image" class="col-sm-2 control-label">Choose image</label>
			   <div class="col-sm-10">
			     <input type="file" class="form-control" id="image" name="file" placeholder="address">
			   </div>
			 </div> -->


			  <div class="form-group">
			    <label for="managername" class="col-sm-2 control-label">Manager name</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="managername" name="managername" placeholder="manager name">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="email" class="col-sm-2 control-label">Email</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="email" name="email" placeholder="email">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="password" class="col-sm-2 control-label">Password</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="password" name="password" placeholder="password">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="role" class="col-sm-2 control-label">Role</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="role" name="role" placeholder="role">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="phone" class="col-sm-2 control-label">Phone</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="phone" name="phone" placeholder="phone">
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
