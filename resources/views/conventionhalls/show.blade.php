@extends('app_layout.layout')

@section('title', '|AdminDashboard')
@section('content')

<div class="container">
	<section>
	<div class="panel panel-default">
	<div class="panel-heading">
		<h4>{{$conventionhall->name}}</h4>
	</div>
	<div class="panel-body">
		<div class="img">
			<img src="/images/a/images16.jpg" class="img-responsive" alt="Image">
		</div>
		
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="about">
					<p>{{$conventionhall->description}}</p>
				</div>
			</div>
		</div>

		<div class="panel panel-primary">
			<div class="panel-heading">
				<h5>Facilities</h5>
			</div>
			<div class="panel-body">
				<div class="facility">
					<ul>
						<li>AC</li>
						<li>Ac</li>
					</ul>
				</div>
			</div>
		</div>


		<div class="panel panel-info">
			<div class="panel-heading">
				<h5>Venue/Hall</h5>
			</div>
			<div class="panel-body">
				<div class="facility">
					<ul>
						<li>
							<div class="col-md-6">Name:</div>
							<div class="col-md-6">{{$venue->name}}</div>
						</li>

						<li>
							<div class="col-md-6">Capacity:</div>
							<div class="col-md-6">{{$venue->capacity}}</div>
						</li>

						<li>
							<div class="col-md-6">Size:</div>
							<div class="col-md-6">{{$venue->size}}</div>
						</li>
						<li>
							<div class="col-md-6">Facilities:</div>
							<div class="col-md-6">{{$venue->facilities}}</div>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h5>Food type</h5>
			</div>
			<div class="panel-body">
				<table class="table table-responsive table-bordered">
					<thead>
						<tr>
							<th>Menu name</th>
							<th>Menu 1</th>
							<th>Menu 2</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Food type</td>
							<td>veg</td>
							<td>veg</td>
						</tr>
						<tr>
							<td>Price</td>
							<td>444</td>
							<td>567</td>
						</tr>
						<tr>
							<td>Menu items</td>
							<td><button type="button" class="btn btn-primary">See more</button></td>
							<td><button type="button" class="btn btn-primary">See more</button></td>
						</tr>
					</tbody>
				</table>

				 <form action="{{route('reservation.create', $conventionhall->id)}}" method="GET">
                        <input class="btn btn-primary" type="submit" value="Reserve">
                 </form>
			</div>
		</div>
	</div>
</div>
</section>
</div>

@endsection
@section('scrollup')

    @include('home_pages.scrollup')

@endsection
