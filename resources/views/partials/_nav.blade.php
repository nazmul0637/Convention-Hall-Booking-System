<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <header id="home" class="navbar-fixed-top">
            <div class="header_top_menu clearfix">  
                <div class="container">
                    <div class="row">   
                        <div class="col-md-5 col-md-offset-3 col-sm-12 text-right">
                            <div class="call_us_text">
                                <a href=""><i class="fa fa-clock-o"></i> Book venue 24/7</a>
                                <a href=""><i class="fa fa-phone"></i>+8801611724568</a>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="head_top_social text-right">
                                <a href="www.facebook.com"><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                                <a href=""><i class="fa fa-pinterest-p"></i></a>
                                <a href=""><i class="fa fa-youtube"></i></a>
                                <a href=""><i class="fa fa-phone"></i></a>
                                <a href=""><i class="fa fa-camera"></i></a>
                            </div>  
                        </div>

                    </div>          
                </div>
            </div>

            <!-- End navbar-collapse-->

            <div class="main_menu_bg">
                <div class="container"> 
                    <div class="row">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand our_logo" href="/"><img src="{{ asset('images/a/images15.png') }}" alt="" /></a>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                    <ul class="nav navbar-nav navbar-right">
                                        
                                        
                                        
                                        @if(Auth::user()->role=='admin')

                                            <li class="dropdown" >
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style="background: rgb(30, 46, 59)">
                                                        convention hall <span class="caret"></span>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li>
                                                            <a href="{{ route('convention.create') }}"
                                                                >
                                                                add
                                                            </a>
                                                            
                                                        </li>
                                                    </ul>
                                                </li>
                                       
                                        @endif
                                        @if(Auth::user()->role=='manager')

                                            <li>
                                                
                                                <a href="{{route('reservation.list')}}" >Reservations</a>

                                            </li>
                                       
                                        @endif
                                        @if(Auth::user()->role=='manager')

                                            <li class="dropdown" >
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style="background: rgb(30, 46, 59)">
                                                        Venues <span class="caret"></span>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li>
                                                            <a href="{{ route('venue.create') }}"
                                                                >
                                                                add venue
                                                            </a>
                                                            
                                                        </li>
                                                    </ul>
                                                </li>
                                       
                                        @endif
                                        @if(Auth::user()->role=='manager')

                                            <li class="dropdown" >
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style="background: rgb(30, 46, 59)">
                                                        Foodmenu <span class="caret"></span>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li>
                                                            <a href="{{ route('foodmenu.create') }}"
                                                                >
                                                                add foodmenue
                                                            </a>
                                                            
                                                        </li>
                                                    </ul>
                                                </li>
                                       
                                        @endif
                                         @if(Auth::user()->role=='manager')
                                        <li class="dropdown" >
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style="background: rgb(30, 46, 59)">
                                                        Map <span class="caret"></span>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li>
                                                            <a href="{{ route('map.create') }}"
                                                                >
                                                                add map value
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                       
                                        @endif
                                        
                                        


                            @if(Auth::check())
                            <li class="dropdown" >
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style="background: rgb(30, 46, 59)">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @else
                            <li><a href="{{ route('login') }}" >Sign In</a></li>
                            @endif
                                        
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
            </div>  
        </header> <!-- End Header Section -->
