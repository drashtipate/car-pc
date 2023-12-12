<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ROYAL CARS </title>


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->

    <link href="{{asset('user/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('user/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('user/css/bootstrap.min.css')}}" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Template Stylesheet -->
    <link href="{{asset('user/css/style.css')}}" rel="stylesheet">
    {{-- Laravel Vite - CSS File --}}
    {{-- {{ module_vite('build-user', 'Resources/assets/sass/app.scss') }} --}}
    <style>
    p {
        font-weight: 400 !important;
    }
    </style>

</head>

<body>
   
@php

$member = \App\helper\helper::get_cars()
@endphp
<div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
    <div class="row">
        <div class="col-md-4 text-center text-lg-left mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center">
                <a class="text-body pr-3" href="tel:tel"><i class="fa fa-phone-alt mr-2"></i>9586249256</a>
                <span class="text-body">|</span>
                <a class="text-body px-3" href="mailto:"><i class="fa fa-envelope mr-2"></i>royalcar@gmail.com</a>
            </div>
        </div>

        <div class="col-md-4 text-center ">
            <div class="d-inline-flex align-items-center">
                @if (Auth::guard('users')->check())
                    <div class="">
                        <strong style="font-weight:400;">Welcome To Car rental portal&nbsp;<span style="color:var(--primary);">{{Auth::guard('users')->user()->name}}</span></strong>
                    </div>
                @else
                    <div class="" style="color:var(--secondary);">
                     no available
                    </div>
                @endif
            </div>
        </div>

        <div class="col-md-4 text-center text-lg-right" style="right:60px;">
            <div class="d-inline-flex align-items-center">
                <a class="text-body px-3" href="https://www.facebook.com">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-body px-3" href="https://www.twitter.com">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="text-body px-3" href="https://www.linkedin.com">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="text-body px-3" href="https://instagram.com/rxjviii_2405_?igshid=ZDdkNTZiNTM=">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="text-body pl-3" href="https://www.youtube.com">
                    <i class="fab fa-youtube"></i>
                </a>
                
                <div class="dropdown ">
                    <a href="#" class="nav-link dropdown-toggle user1" data-toggle="dropdown">
                        <i class="fa fa-user-circle fa-lg">    </i>
                    </a>
                    
                    <div class="dropdown-menu rounded-0 m-0 user ">
                        @if (Auth::guard('users')->check())
                        <a href="{{ url('users/logout') }}" class="dropdown-item">Logout</a>
                        <a href="{{ url('users/profile') }}" class="dropdown-item ">My Account </a>
                        @else
                        <a href="{{ url('users/login') }}" class="dropdown-item">Login</a>
                        @endif

                        <a href="{{ url('users/register') }}" class="dropdown-item">Register</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar Start -->
<div class="container-fluid position-relative nav-bar p-0">
    <div class="position-relative px-lg-5" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
            <a href="{{ url('users/') }}" class="navbar-brand">
                <h1 class="text-uppercase text-primary mb-1">Royal Cars</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="{{ url('users/') }}" class="nav-item nav-link ">Home</a>
                    <a href="{{ url('users/about') }}" class="nav-item nav-link">About</a>
                    <a href="{{ url('users/service') }}" class="nav-item nav-link">Service</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{ url('users/team') }}" class="dropdown-item">The Team</a>
                            <a href="{{ url('users/testimonial') }}" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="{{ url('users/list') }}" class="nav-item nav-link ">Cars</a>
                    <!-- <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{ url('users/list') }}" class="dropdown-item">Car Listing</a>
                            <a href="{{ url('users/booking') }}" class="dropdown-item">Car Booking</a>
                        </div> -->


                    <a href="{{ url('users/contact') }}" class="nav-item nav-link">Contact</a>

                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->


<!-- Search Start -->
<!-- <style>
    .hide {
        display: none;
    }

    p {
        font-weight: bold;
    }

    input[type="datetime-local"]:before {
        content: attr(placeholder) !important;
        color: #aaa;
        margin-right: 0.5em;
        display: none !important;
    }

    input[type="datetime-local"]:focus:before,
    input[type="datetime-local"]:valid:before {
        content: "";
    }
</style>


<form action="{{url('users/search')}}" method="GET">

    <div class="container-fluid bg-white pt-3 px-lg-5">
        <div class="row mx-n2 justify-content-center">
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <select class="custom-select px-4 mb-3 " name="pickups" style="height: 50px;">
                    <option selected>Pickup Location</option>
                    @foreach(App\Models\pincode::with(['country','state','cityes'])->get() as $members)
                    <option value="{{$members->id}}">{{$members->area}},{{$members->pincode}},
                        {{$members->cityes->name}},{{$members->state->name}},{{$members->country->name}}
                    </option>
                    @endforeach
                </select>

            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 px-2" id="div1">
                <select class="custom-select px-4 mb-3" name="drops" style="height: 50px;">
                    <option selected>Drop Location</option>
                    @foreach(App\Models\pincode::with(['country','state','cityes'])->get() as $members)
                    <option value="{{$members->id}}">{{$members->area}},{{$members->pincode}},
                        {{$members->cityes->name}},{{$members->state->name}},{{$members->country->name}}
                    </option>
                    @endforeach

                </select>
            </div>
            <?php
            $mindate = date("Y-m-d");
            $mintime = date("h:i");
            $min = $mindate . "T" . $mintime;
            $maxdate = date("Y-m-d", strtotime("+10 Days"));
            $maxtime = date("h:i");
            $max = $maxdate . "T" . $maxtime;
            ?>
            <div class="col-xl-2 col-lg-2 col-md-6 px-2">
                <input type="text" name="ptime" id="time1" class="form-control p-4 " min="<?= $min ?>" placeholder="Pickup Date/Time" required data-target="" data-toggle="" />

            </div>
            
            <div class="col-xl-2 col-lg-2 col-md-6 px-2">
                <input type="text" name="dtime" id="time2" class="form-control p-4 " min="<?= $min ?>" placeholder="Drop Date/Time" required data-target="" data-toggle="" />
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 px-2">
                <select class="custom-select px-4 mb-3" id="car" name="car" style="height: 50px;">
                    <option value="">Select a Car</option>
                </select>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6px-2 ">
                <button class="btn btn-primary btn-block mb-3" href="" type="submit" style="height: 50px;">Search<span class="arrow">&#x27F6;</span></button>
            </div>

        </div>
    </div>
</form> -->
<!-- Search end -->
    <!-- @yield('content') -->

<!-- Page Header Start -->
<!-- <div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3" data-0-top="opacity:0;left:100px;" data-200-top="opacity:1;left:0px;">Login</h1>
    <div class="d-inline-flex text-white" data-0-top="opacity:0;left:100px;" data-200-top="opacity:1;left:0px;">
        <h6 class="text-uppercase m-0"><a class="text-white" href="{{ url('users/') }}">Home</a></h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0">RESET PASSWORD</h6>
    </div>
</div> -->
<!-- Page Header Start -->

<div class="container-fluid py-5">
    <div class="container py-5">


        <section class="Login-wrap ptb-100">
            <div class="container">
                <div class="row ">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                        <div class="login-form-wrap">
                            <div class="login-header">
                                <h3>Reset Password</h3>
                            </div>
                            <br>
                            <div class="login-form">
                                <div class="login-body">
                                    
                                    @if ($data == null || $errors->has($data->email))
                                        <form>
                                            @csrf
                                            <div>
                                                <label for="password" class="col-md-12 col-form-label text-md-right">Reset Password Link is expired!</label>
                                            </div>
                                        </form>
                                    @else
                                        <form action="{{ route('reset.password.post') }}" method="POST">
                                        @csrf
                                            <input type="hidden" name="token" value="{{ $data->token }}">
                                        
                                            <div class="form-group row">
                                                <label for="password" class="col-md-4 col-form-label text-md-right">User Email</label>
                                                    <div class="col-md-6">
                                                    
                                                        @if ($errors->has($data->email) == false)
                                                        <label for="email" name="email1" class="col-md-9 col-form-label text-md-right">{{ $data->email  }}</label>
                                                        <input type="hidden" class="form-control" name="email" value="{{ $data->email  }}">
                                                        @endif
                                                    </div>
                                            </div>
                
                                            <div class="form-group row">
                                                <!-- <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label> -->
                                                    <div class="col-md-12">
                                                        <input type="password" id="password" class="form-control" name="password" placeholder="New Password"  autofocus>
                                                        @if ($errors->has('password'))
                                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                                        @endif
                                                    </div>
                                            </div>
                
                                            <div class="form-group row">
                                                <!-- <label for="password-confirm" class="col-md-5 col-form-label text-md-right">Confirm Password</label> -->
                                                    <div class="col-md-12">
                                                        <input type="password" id="password-confirm" class="form-control" name="password_confirmation" placeholder="Confirm Password"  autofocus>
                                                        @if ($errors->has('password_confirmation'))
                                                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                                        @endif
                                                    </div>
                                            </div>
                
                                            <div class="col-md-12 md-4">
                                                <button type="submit" class="btn style1 mb-3 mt-2" style="width:100%;">
                                                    Reset Password
                                                </button>
                                            </div>
                                        </form>
                        
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@yield('scripts')
    @include('user::layouts.footer')
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

    <script src="{{asset('user/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('user/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('user/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('user/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('user/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('user/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('user/js/main.js')}}"></script>
    <script src="{{asset('user/lib/checkout/checkout.js')}}"></script>

    <!-- skrollr -->
    <script src="{{asset('user/js/skrollr.js')}}"></script>
    <script type="text/javascript">
	    var s = skrollr.init();
	</script>

</body>

</html>




















<!-- <main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Reset Password</div>
                  <div class="card-body">
                    @if ($data == null || $errors->has($data->email))
                        <form>
                          @csrf
                        
                          <div>
                              <label for="password" class="col-md-12 col-form-label text-md-right">Reset Password Link is expired!</label>
                          </div>
                        </form>
                    @else
                        <form action="{{ route('reset.password.post') }}" method="POST">
                          @csrf
                            <input type="hidden" name="token" value="{{ $data->token }}">
                        
                            <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">User Email</label>
                                <div class="col-md-6">
                                 
                                    @if ($errors->has($data->email) == false)
                                    <label for="email" name="email1" class="col-md-9 col-form-label text-md-right">{{ $data->email  }}</label>
                                    <input type="hidden" name="email" value="{{ $data->email  }}">
                                    @endif
                                </div>
                            </div>
  
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password" required autofocus>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                            </div>
  
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autofocus>
                                        @if ($errors->has('password_confirmation'))
                                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                    </div>
                            </div>
  
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary mb-3 mt-2">
                                    Reset Password
                                </button>
                            </div>
                        </form>
                      
                    @endif
                  </div>
              </div>
          </div>
      </div>
  </div>
</main> -->

