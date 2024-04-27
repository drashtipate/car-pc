@extends('user::layouts.master')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3" data-0-top="opacity:0;left:100px;" data-200-top="opacity:1;left:0px;">Register</h1>
    <div class="d-inline-flex text-white" data-0-top="opacity:0;left:100px;" data-200-top="opacity:1;left:0px;">
        <h6 class="text-uppercase m-0"><a class="text-white" href="{{ url('users/') }}">Home</a></h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0">Register</h6>
    </div>
</div>
<!-- Page Header Start -->
<style>
    p {
        font-weight: 400 !important;
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
                            <div class="login-header">
                                <h3>Create New Account</h3>
                                <p>Welcome!! Create Your Account</p>
                            </div>

                            <form action="{{url('users/add')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' name="user_image" id="imageUpload"  accept=".png, .jpg, .jpeg" />
                                        <label for="imageUpload"></label>
                                    </div>
                                    <div class="avatar-preview">
                                        <!-- <div id="imagePreview" style="background-image:url({{asset('user/img/man.jpg')}});">
                                        </div> -->
                                        <img id="imagePreview" style="background-image:url({{asset('user/img/man.jpg')}});">
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
                                                    <input id="text" name="username" class="form-control p-4" value="{{old('name')}}" type="text" placeholder="Username">
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
                                                    <input id="email" name="email" class="form-control p-4" type="email" value="{{old('email')}}" placeholder="Email Address">
                                                    <!-- <span class="text-danger">@error('email') {{$message}}@enderror</span> -->
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
                                                    <input id="mobile" name="number"  class="form-control p-4" value="{{old('number')}}"  type="mobile" placeholder="Mobile Number">
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
                                                <div class="tacbox">
                                                    <input style="height:1em; width:1em; top:2px;" id="checkbox" type="checkbox" name="checkbox"/>
                                                    <label for="checkbox"> I accept <a href="{{ url('users/terms')}}" style="text-decoration:underline;">Terms of Use</a> & <a href="{{ url('users/privatepolicy') }}" style="text-decoration:underline;">Privacy Policy.</a></label>
                                                    <br>
                                                    <span class="text-danger">
                                                        @error('checkbox')
                                                         {{$message}}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <button class="btn style1" style="width:100%;">
                                                        SIGN UP<i class="ri-arrow-right-s-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="text-align:center;">
                                                <p class="mb-0">Already have an account? <a class="link style1"  href="{{ url('users/login') }}">{{ __('Sign In') }}</a></p>
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
