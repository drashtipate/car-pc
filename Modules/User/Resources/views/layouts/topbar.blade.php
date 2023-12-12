<style>
    .text-typing {
        margin:0px;
        width: 100%;
        white-space:nowrap;
        overflow:hidden;
        border-right: 2px solid var(--primary); 
        /* animation: typing; */
        animation:typing 5s steps(31) forwards,
                    cursor .1s step-end infinite alternate;
    }
    @keyframes typing {
    0% { width:0% }
    
    }
    @keyframes cursor {
        /* 0%,
        100% {
            border-right:2px solid;
        } */
        50% {
            border-color:2px solid var(--primary);
        }   
    }
</style>
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
                    <div class="text-typing">
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
<style>
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
</form>
<!-- Search end -->