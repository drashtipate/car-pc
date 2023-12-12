@extends('user::layouts.master')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3" data-0-top="opacity:0;left:100px;" data-200-top="opacity:1;left:0px;">My Account</h1>
    <div class="d-inline-flex text-white" data-0-top="opacity:0;left:100px;" data-200-top="opacity:1;left:0px;">
        <h6 class="text-uppercase m-0"><a class="text-white" href="{{ url('users/') }}">Home</a></h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0">Edit Profile</h6>
    </div>
</div>
<!-- Page Header Start -->
<style>
    p {
        font-weight: 400 !important;
    }
    .back-users{
        /* left: 27rem; */
        bottom: 1rem;
        border: 2px solid #F77D0A;
        border-radius: 50%;
        width: 8%;
        /* background: #F77D0A; */
    }
</style>
                            
<div class="container-fluid py-5">
    <div class="container py-5">

        <section class="Login-wrap ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                            @if (session()->has('message'))
                                <div class="alert alert-success" role="alert">
                                    {{ session()->get('message') }}
                                </div>
                            @elseif (session()->has('error'))
                                <div class="alert alert-denger" role="alert">
                                    {{ session()->get('error') }}
                                </div>
                            @endif
                        <div class="login-form-wrap">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <a href="{{url('users/profile')}}" style="left:27rem;">
                                            <img class="back-users" src="{{asset('user/img/back-1.png')}}">
                                        </a>
                                    </div>
                                </div>
                            <div class="login-header">
                                <h3>Edit Account</h3>
                                <p>Welcome!! Create Your Account</p>
                            </div>
                            
                            <form action="{{ url('users/profile/update/'. $data->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' name="user_image" id="imageUpload"  accept=".png, .jpg, .jpeg" />
                                        <label for="imageUpload"></label>
                                    </div>
                                    <div class="avatar-preview">
                                        <!-- <div id="imagePreview" style="background-image:url({{asset('user/img/man.jpg')}});">
                                        </div> -->
                                        <img id="imagePreview" style="width:140px;height:140px;border-radius:100%;position:relative;" src="{{asset('images/user/'.$data->images)}}">
                                    </div>
                                        <span class="text-danger">
                                            @error('user_image')
                                            {{$message}}
                                            @enderror
                                        </span>
                                </div>
                                <div class="login-form">
                                    <div class="login-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <!-- <label for="username">Username</label> -->
                                                    <input id="text" name="username" class="form-control p-4" value="{{ $data->name }}" type="text" placeholder="Username">
                                                    <span class="text-danger">
                                                        @error('username')
                                                        {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <!-- <label for="email">Email Address</label> -->
                                                    <input id="email" name="email" class="form-control p-4" type="email" value="{{ $data->email}}" placeholder="Email Address">
                                                    <span class="text-danger">
                                                        @error('email')
                                                        {{$message}}
                                                        @enderror
                                                    </span>
                                                        
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <!-- <label for="mobile">Mobile No</label> -->
                                                    <input id="mobile" name="number"  class="form-control p-4" value="{{ $data->number }}"  type="mobile" placeholder="Mobile Number">
                                                    <span class="text-danger">
                                                        @error('number')
                                                        {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <!-- <label for="pwd">Password</label> -->
                                                    <input id="password" type="password" class="form-control p-4"  value="{{old('password')}}" name="password" placeholder="Password">
                                                    <span class="text-danger">
                                                        @error('password')
                                                        {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <!-- <label for="pwd_2">Confirm Password</label> -->
                                                    <input id="password" type="password" class="form-control p-4"  value="{{old('password_confirmation')}}"  name="password_confirmation" placeholder="Confirm Password">
                                                    <span class="text-danger">
                                                        @error('password_confirmation')
                                                        {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <button class="btn style1" style="width:100%;">
                                                        UPDATE<i class="ri-arrow-right-s-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>



@endsection