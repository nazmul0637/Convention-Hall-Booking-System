@extends('app_layout.layout')

@section('title', '|userDashboard')
@section('content')

   <!--  <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">AdminDashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
 -->

    <section >
            <div >
                <div class="container">
                      <h2></h2>
                      <p>The .table-condensed class makes a table more compact by cutting cell padding in half:</p>            
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
                        @foreach($conventions as $convention)
                          <tr>
                            <td>{{$convention->name}}</td>
                            <td>{{$convention->address}}</td>
                            <td>{{$convention->Num_of_hall}}</td>
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
