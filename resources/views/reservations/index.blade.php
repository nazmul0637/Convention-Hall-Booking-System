@extends('app_layout.layout')

@section('title', '|userDashboard')
@section('content')
    <section >
            <div >
                <div class="container">
                      <h2></h2>
                                 
                      <table class="table table-condensed">
                        <thead>
                          <tr>
                            <th>Name of Convention HAll</th>
                            <th>Address</th>
                            <th>Number of halls</th>
                             <th>Action</th>

                          </tr>
                        </thead>
                        <tbody>
                        @foreach($reservations as $reservation)
                          <tr>
                            <td>{{$reservation->venue}}</td>
                            <td>{{$reservation->total_guest}}</td>
                            <td>{{$reservation->reservation_date}}</td>
                            <td>{{$reservation->reservation_date}}</td>
                            <td>{{$reservation->reservation_time_slot}}</td>
                            <td>{{$reservation->special_requirement}}</td>
                            <td>{{$reservation->reservation_date}}</td>
                            <td>
                                <form action="{{route('convention.show', $convention->id)}}" method="GET">
                                <input type="submit" value="view">
                                </form>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
            </div>
        </section>
@endsection
@section('scrollup')

    @include('home_pages.scrollup')

@endsection