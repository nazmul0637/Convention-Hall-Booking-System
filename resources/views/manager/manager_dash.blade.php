@extends('app_layout.layout')

@section('title', '|AdminDashboard')
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
                    <div class="row">
                        <div class=" text-center">
                            <div class="col-md-12">
                                <div class="main_slider_content wow zoomIn" data-wow-duration="1s">
                                    <h1>ManagerDashBoard</h1>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi. </p>
                                </div>
                            </div>  
                        </div>

                    </div>
                </div>
            </div>
        </section>

@endsection
@section('scrollup')

    @include('home_pages.scrollup')

@endsection
