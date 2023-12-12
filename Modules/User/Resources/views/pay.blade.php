@extends('user::layouts.master')

@section('content')


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>


<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3" data-0-top="opacity:0;left:100px;" data-200-top="opacity:1;left:0px;">Car checkout</h1>
    <div class="d-inline-flex text-white" data-0-top="opacity:0;left:100px;" data-200-top="opacity:1;left:0px;">
        <h6 class="text-uppercase m-0"><a class="text-white" href="{{ url('users/') }}">Home</a></h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0">Car checkout</h6>
    </div>
</div>
<!-- Page Header Start -->

<style>
    p {
        font-weight: 400 !important;
    }
</style>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Checkout example · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->

</head>




<!--For Page-->
<div class="bg">
    <!--For Row containing all card-->
    <form action="{{url('users/cashes')}}" method="POST">
        {{ csrf_field() }}
        <div class="row mainRow">
            <!--Card 1-->
            <div class="col-sm-8">
                <div class="card card-cascade wider shadow p-3 mb-5 ">
                    @foreach($data as $datas)
                    <!--Card image-->
                    <input type="hidden" class="id" name="id" value="{{$datas->id}}">
                    <!-- <h1 class="display-4 text-uppercase mb-5">{{$datas->name}} </h1> -->
                    <input type="hidden" name="car_id" class="car_id" value="{{$datas->car_id}}">
                    <div class="row align-items-center pb-2">
                        <div class="col-lg-6 mb-4">
                            <img class="img-fluids" src="{{asset('images/car/'.$datas->car_image->img_path)}}" alt="">
                        </div>
                        <div class="col-lg-6 mb-4">
                            <h4 class="mb-1 ">Pick-up </h4>
                            <div class="px-1">
                                <input type="hidden" name="ptime" name="ptime" value="{{session('ptime')}}">
                                <span>{{session('ptime')}}</span>
                            </div>
                            <input type="hidden" name="pickup" name="pickup" value="{{$datas->pickup}}">
                            <h6>
                                <a style="color:#0062cc;" href="https://www.bing.com/local?lid=YN4070x1264614165227763079&id=YN4070x1264614165227763079&q=Anand+Yoga+Village&name=Anand+Yoga+Village&cp=15.005414009094238%7e74.02835845947266&ppois=15.005414009094238_74.02835845947266_Anand+Yoga+Village&PC=U531">
                                    <i class="fa-solid fa-location-dot blue"></i>{{$details->area}},{{$details->pincode}},{{$details->cityes->name}},{{$details->state->name}},{{$details->country->name}}
                                </a>
                            </h6>
                            <br>

                            <div class="cash">
                                <h4 class="mb-1 picks">Drop-up </h4>
                                <div class="px-1">
                                    <input type="hidden" name="dtime" name="dtime" value="{{session('dtime')}}">
                                    <span>{{session('dtime')}}</span>
                                </div>
                                <input type="hidden" name="drop" name="drop" value="{{$datas->drop}}">
                                <h6>
                                    <a style="color:#0062cc;" href="https://www.google.co.in/maps/preview">
                                        <i class="fa-solid fa-location-dot blue"></i>{{$details->area}},{{$details->pincode}},{{$details->cityes->name}}
                                    </a>
                                </h6>
                            </div>
                        </div>
                    </div>

                    <h1 class="display-4 text-uppercase mb-5"></h1>
                    @foreach($datas->cars as $da)
                    <div class="row subRow1">
                        <div class="col-md-3">
                            <i class="fa-car fa-solid fa-caret-right text-primary"></i> model:{{$da->model}}
                        </div>

                        <div class="col-md-3">
                            <i class="fa-cogs fa-solid fa-caret-right text-primary"></i> {{$da->type}}
                        </div>
                        <div class="col-md-3">

                            <i class="fa-road fa-solid  fa-caret-right text-primary"></i> {{$da->average}}
                        </div>
                        <div class="col-md-3">
                            <i class="fa-eye fa-solid fa-caret-right text-primary"></i> {{$da->gps}}
                        </div>
                    </div>
                    @endforeach
                    <!--Product Description-->
                    <div class="desc">
                        <!-- 1st Row for title-->
                        <div class="row subRow">
                            <!--Column for Data-->
                            <div class="col">
                                <p class="text-muted row1"><b>Name :</b></p>
                                <input type="hidden" name="firstname" name="firstname" value="{{$datas->firstname}} ">
                                <p class="row2">{{$datas->firstname}} </p>

                            </div>
                            <!--Column for Data-->
                            <div class="col">
                                <p class="text-muted row1"><b>Last Name :</b> </p>
                                <input type="hidden" name="lname" name="lname" value="{{$datas->lname}} ">
                                <p class="row2" name="">{{$datas->lname}}</p>
                            </div>

                            <!--Column for Data-->
                            <div class="col">
                                <p class="text-muted row1"><b>Email :</b></p>
                                <input type="hidden" name="email" name="email" value="{{$datas->email}} ">
                                <p class="row2">{{$datas->email}}</p>
                            </div>
                            <input type="hidden" name="amount" name="amount" value="{{$datas->amount}} ">

                            <input type="hidden" name="description" name="description" value="{{$datas->request}} ">
                        </div>
                        <!-- 2nd Row for title-->
                        <div class="row subRow">
                            <!--Column for Data-->
                            <div class="col">
                                <p class="text-muted row1"><b>Number :</b></p>
                                <input type="hidden" name="number" name="number" value="{{$datas->number}} ">
                                <p class="row2">{{$datas->number}}</p>
                            </div>
                            <!--Column for Data-->
                            <div class="col">
                                <p class="text-muted row1"><b>Adult :</b></p>
                                <input type="hidden" name="adult" class="row2" name="adult" value="{{$datas->adult}} ">
                                <p class="row2">{{$datas->adult}}</p>
                            </div>
                            <!--Column for Data-->
                            <div class="col">
                                <p class="text-muted row1"><b>Child :</b></p>
                                <input type="hidden" name="child" name="child" value="{{$datas->child}} ">
                                <p class="row2">{{$datas->child}}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



            <!--Card 2-->
            <div class="col-sm-4">

                <div class="card card-cascade card-ecommerce wider shadow p-3 mb-5 ">

                    <!--Card Body-->
                    <div class="card-body card-body-cascade">

                        <!--Card Description-->
                        <div class="card2decs">

                            <p class="heading1"><strong></strong></p>
                            @foreach($datas->cars as $da)
                            <p class="quantity">price <span class="float-right text1">{{$da->amount}}</span></p>
                            @endforeach
                            <p class="subtotal">Hour<span class="float-right text1">{{session('diff_in_hours')}}</span></p>

                            <p class="total"><strong>Total</strong><span class="float-right totalText1">₹<span class="totalText2">{{$datas->amount}}</span></span></p>

                        </div>
                        @endforeach
                        <div class="payment">

                            <p class="heading2"><strong>Payment Details</strong></p>

                            <input type="hidden" name="status" value="0">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="cardAndExpireValue type" value="cash" name="type" id="paypal">
                                <label for="paypal">Pay At rental Counter</label>
                            </div>

                            <div class="custom-control custom-radio">
                                <input type="radio" class="cardAndExpireValue type" value="online" name="type" id="rdSelect">
                                <label for="paypal">Pay Online</label>
                            </div>

                            <div class="card-footer text-center">
                                <button type="submit" class="purchaseLink" id="btnStatus"> PURCHASE &#8594;</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Vendor Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="owl-carousel vendor-carousel">
            <div class="bg-light p-4">
                <img src="{{asset('user/img/vendor-1.png')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('user/img/vendor-2.png')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('user/img/vendor-3.png')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('user/img/vendor-4.png')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('user/img/vendor-5.png')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('user/img/vendor-6.png')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('user/img/vendor-7.png')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('user/img/vendor-8.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->


@endsection