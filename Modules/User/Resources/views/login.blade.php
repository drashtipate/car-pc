@extends('user::layouts.master')

@section('content')

<style>
    p {
        font-weight: 400 !important;
    }
</style>
<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3" data-0-top="opacity:0;left:100px;" data-200-top="opacity:1;left:0px;">Login</h1>
    <div class="d-inline-flex text-white" data-0-top="opacity:0;left:100px;" data-200-top="opacity:1;left:0px;">
        <h6 class="text-uppercase m-0"><a class="text-white" href="{{ url('users/') }}">Home</a></h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0">Login</h6>
    </div>
</div>
<!-- Page Header Start -->

<div class="container-fluid py-5">
    <div class="container py-5">


        <section class="Login-wrap ptb-100">
            <div class="container">
                <div class="row ">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                            @if(Session::has('message'))
                                <div class="alert alert-success">
                                {{Session::get('message')}}
                                </div>
                            @endif
                            @if(Session::has('fail'))
                                <div class="alert alert-danger">
                                {{Session::get('fail')}}
                                </div>
                            @endif
                        <div class="login-form-wrap">
                            <div class="login-header">
                                <h3>Login Here</h3>
                                <p>Welcome Back!! Login To Your Account</p>
                            </div>
                            <br>
                            <div class="login-form">
                                <div class="login-body">
                                    <form action="{{url('users/checks')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <!-- <label for="email">Username/Email Address</label> -->
                                                    <input id="email" name="email" class="form-control p-4" type="email" value="{{old('email')}}" placeholder="Email Address*">
                                                    <span class="text-danger">@error('email') {{$message}}@enderror</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <!-- <label for="pwd">Password</label> -->
                                                    <input id="pwd" name="password" class="form-control p-4" type="password" value="{{old('password')}}" placeholder="Password*">
                                                    <span class="text-danger">@error('password') {{$message}}@enderror</span>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <button class="btn style1" style="width:100%;">
                                                        LOGIN
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="text-align:center;">
                                                <p class="mb-0">Don’t have an account yet?&nbsp;&nbsp;<a class="link style1" href="{{ url('users/register') }}">{{ __('Signup Here') }}</a></p>
                                            </div>
                                            <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end mb-20" style="text-align:center; left: 7rem;">
                                                <a href="" data-toggle="modal" data-target="#add" class="link style1">Forgot
                                                    Password?</a>
                                            </div> -->
                                            <div class="col-lg-12 col-md col-sm mb-20" style="text-align:center;">
                                                <a href="{{ route('forget.password.get') }}"  class="link style1">Forgot
                                                    Password?</a>
                                            </div>
                                            <!-- login with google -->
                                            <!-- <a href="{{ route('login') }}"><h4>Login With GOOGLE</h4></a> -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection