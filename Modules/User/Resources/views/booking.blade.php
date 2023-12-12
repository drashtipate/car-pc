@extends('user::layouts.master')

@section('content')




<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>


<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3" data-0-top="opacity:0;left:100px;" data-200-top="opacity:1;left:0px;">Car Booking</h1>
    <div class="d-inline-flex text-white" data-0-top="opacity:0;left:100px;" data-200-top="opacity:1;left:0px;">
        <h6 class="text-uppercase m-0"><a class="text-white" href="{{ url('users/') }}">Home</a></h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0">Car Booking</h6>
    </div>
</div>
<!-- Page Header Start -->

<style>
    p {
        font-weight: 400 !important;
    }
</style>




<!-- Car Booking Start -->
<div class="col-md-12 offset-md-2">
    <form action="{{url('users/cash')}}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$data->id}}">

        <input type="hidden" class="form-control p-4" name="amount" value="{{$data->amount*session('diff_in_hours')}}">

        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <h2 class="mb-4">Personal Detail</h2>
                    <div class="mb-5">
                        <div class="row">

                            <div class="col-6 form-group">
                                <input type="text" class="form-control p-4" name="firstname" placeholder="First Name" required="required">
                            </div>
                            <div class="col-6 form-group">
                                <input type="text" class="form-control p-4" name="lastname" placeholder="Last Name" required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 form-group">
                                <input type="email" class="form-control p-4" name="email" placeholder="Your Email" required="required">
                            </div>
                            <div class="col-6 form-group">
                                <input type="text" class="form-control p-4" name="number" placeholder="Mobile Number" required="required">
                            </div>
                        </div>
                    </div>
                    <h2 class="mb-4">Booking Detail</h2>
                    <div class="mb-5">

                        <div class="row">
                            <div class="col-6 form-group">
                                <input type="text" name="pickups" class="form-control p-4 " value="{{$detail->area}},{{$detail->pincode}},{{$detail->cityes->name}}">

                            </div>
                            <div class="col-6 form-group">
                                <input type="text" name="drops" class="form-control p-4 " value="{{$details->area}},{{$details->pincode}},{{$details->cityes->name}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 form-group">
                                <div class="date" id="date3" data-target-input="nearest">
                                    <input type="text" name="ptime" class="form-control p-4 " value="{{session('ptime')}}">
                                </div>
                            </div>
                            <div class="col-6 form-group">
                                <div class="time" id="time4" data-target-input="nearest">
                                    <input type="text" name="dtime" class="form-control p-4" value="{{session('dtime')}}" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 form-group">
                                <select class="custom-select px-4" name="adult" style="height: 50px;">
                                    <option selected>Select Adult</option>
                                    <option value="1">Adult 1</option>
                                    <option value="2">Adult 2</option>
                                    <option value="3">Adult 3</option>
                                </select>
                            </div>
                            <div class="col-6 form-group">
                                <select class="custom-select px-4" name="child" style="height: 50px;">
                                    <option selected>Select Child</option>
                                    <option value="1">Child 1</option>
                                    <option value="2">Child 2</option>
                                    <option value="3">Child 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control py-3 px-4" rows="3" name="description" placeholder="Special Request" required="required"></textarea>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary btn-block1"> Check Now</button>
                </div>

                <!-- <div class="col-lg-4">
                    <div class="bg-secondary p-5 mb-5">
                        <h2 class="text-primary mb-4">Payment</h2>
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" value="payapl" name="pay" id="paypal">
                                <label class="custom-control-label" for="paypal">Paypal</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" value="check" name="pay" id="directcheck">
                                <label class="custom-control-label" for="directcheck">Direct Check</label>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" value="bank" name="pay" id="banktransfer">
                                <label class="custom-control-label" for="banktransfer">Bank Transfer</label>
                            </div>
                        </div>
                        <button class="btn btn-block btn-primary py-3">Reserve Now</button>
                        <a class="btn btn-block btn-primary py-3" href="#" data-target="#login" data-toggle="modal">Reserve Now</a>

                    </div>
                </div> -->
            </div>

        </div>
    </form>
</div>



<!-- Car Booking End -->

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