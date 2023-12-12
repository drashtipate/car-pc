@extends('user::layouts.master')

@section('content')



<img class="img-fluid" src="" alt="">



<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3" data-0-top="opacity:0;left:100px;" data-200-top="opacity:1;left:0px;">My Account</h1>
    <div class="d-inline-flex text-white" data-0-top="opacity:0;left:100px;" data-200-top="opacity:1;left:0px;">
        <h6 class="text-uppercase m-0"><a class="text-white" href="{{ url('users/') }}">Home</a></h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0">My Account</h6>
    </div>
</div>
<!-- Page Header Start -->

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="login-form-wrap">
            <div class="container emp-profile">
                <form method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />

                                </div>
                                <div class="preview">
                                    <img src="{{asset('images/user/'.Auth::guard('users')->user()->images)}}">
                                    </img>
                                </div>
                            </div>
                            
                            <div class="profile-work">
                                <h5>{{Auth::guard('users')->user()->name}}</h5>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-head">

                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">History</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>User Id</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{Auth::guard('users')->user()->id}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Name</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{Auth::guard('users')->user()->name}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Email Id</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{Auth::guard('users')->user()->email}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Phone</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{Auth::guard('users')->user()->number}}</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    @foreach($datas as $table)
                                    <div class="card card-1">
                                        <div class="row">
                                            <a class="bttn" href=""> <i class="fa-solid fa-circle-xmark"></i></a>
                                            <div class="d-flex">
                                                <img src="{{asset('images/car/'.$table->car_image->img_path)}}" style=" max-width:20%; padding-left:18px">
                                                @foreach($table->cars as $area)
                                                <div class="col-lg-5 mx-4">

                                                    <h5>{{$area->name}}</h5>
                                                    @endforeach
                                                    <h6><i class="fa-solid fa-location-dot blue"></i>    {{$table->pickup}}.   To 
                                                    <br><i class="fa-solid fa-location-dot blue"></i> {{$table->drop}}</h6>
                                                </div>
                                                <div class="col-lg-3">
                                                @if($table->payment_status==1)
                                                    <button type="button" class="btn-block4">Confrimed</button>
                                                    @elseif($table->payment_status==0)
                                                    <button type="button" class="btn-block5">Not Confrimed yet</button>
                                                    @else
                                                    <button type="button" class="btn-block6">canceled</button>
                                                @endif
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <label style="padding-left:15px">Pickup Date/Time</label>
                                            </div>
                                            <div class="col-lg-5">
                                                <p>{{$table->ptime}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <label style="padding-left:15px">Drop Date/Time</label>
                                            </div>
                                            <div class="col-lg-5">
                                                <p>{{$table->dtime}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <label style="padding-left:15px">Payment</label>
                                            </div>
                                            <div class="col-lg-5">
                                                <p>{{$table->amount}}</p>
                                            </div>
                                        </div>
                                     
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-5 col-auto">
                            <div class="profile-edit-btn">
                                <!-- <a href="{{url('users/register')}}" class="edit-user" style="text-decoration:none; color:#f4f2f2;"> Edit Profile</a> -->
                                <a href="{{ url('users/profile/edit/' .Auth::guard('users')->user()->id) }}" class="edit-user" style="text-decoration:none; color:#f4f2f2;"> Edit Profile</a>
                                
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row"> -->
                        <!-- <div class="col-md-4">
                            <div class="profile-work">
                                <h5>{{Auth::guard('users')->user()->name}}</h5>

                            </div>
                        </div> -->
                        <!-- <div class="col-md-8"> -->
                            <!-- <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>User Id</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{Auth::guard('users')->user()->id}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Name</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{Auth::guard('users')->user()->name}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Email Id</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{Auth::guard('users')->user()->email}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Phone</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{Auth::guard('users')->user()->number}}</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    @foreach($datas as $table)
                                    <div class="card card-1">
                                        <div class="row">
                                            <a class="bttn" href=""> <i class="fa-solid fa-circle-xmark"></i></a>
                                            <div class="d-flex">
                                                <img src="{{asset('images/car/'.$table->car_image->img_path)}}" style=" max-width:20%; padding-left:18px">
                                                @foreach($table->cars as $area)
                                                <div class="col-lg-5 mx-4">

                                                    <h5>{{$area->name}}</h5>
                                                    @endforeach
                                                    <h6><i class="fa-solid fa-location-dot blue"></i>    {{$table->pickup}}.   To 
                                                    <br><i class="fa-solid fa-location-dot blue"></i> {{$table->drop}}</h6>
                                                </div>
                                                <div class="col-lg-3">
                                                @if($table->payment_status==1)
                                                    <button type="button" class="btn-block4">Confrimed</button>
                                                    @elseif($table->payment_status==0)
                                                    <button type="button" class="btn-block5">Not Confrimed yet</button>
                                                    @else
                                                    <button type="button" class="btn-block6">canceled</button>
                                                @endif
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <label style="padding-left:15px">Pickup Date/Time</label>
                                            </div>
                                            <div class="col-lg-5">
                                                <p>{{$table->ptime}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <label style="padding-left:15px">Drop Date/Time</label>
                                            </div>
                                            <div class="col-lg-5">
                                                <p>{{$table->dtime}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <label style="padding-left:15px">Payment</label>
                                            </div>
                                            <div class="col-lg-5">
                                                <p>{{$table->amount}}</p>
                                            </div>
                                        </div>
                                     
                                    </div>
                                    @endforeach
                                </div>
                            </div> -->
                        <!-- </div> -->
                    <!-- </div> -->
                </form>
            </div>
        </div>
    </div>
</div>


@endsection