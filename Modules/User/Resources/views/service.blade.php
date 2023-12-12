@extends('user::layouts.master')

@section('content')




<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3" data-0-top="opacity:0;left:100px;" data-200-top="opacity:1;left:0px;">Service</h1>
    <div class="d-inline-flex text-white" data-0-top="opacity:0;left:100px;" data-200-top="opacity:1;left:0px;">
        <h6 class="text-uppercase m-0"><a class="text-white" href="{{ url('users/') }}">Home</a></h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0" style="font-weight:400;">Service</h6>
    </div>
</div>
<!-- Page Header Start -->


<!-- Services Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <h1 class="display-4 text-uppercase text-center mb-5" data-center-center="opacity:1;top:0;" data-0-bottom="opacity:0;top:-300px;">Our Services</h1>
        <div class="row">

        @forelse ($service as $servicetype)
            <div class="col-lg-4 col-md-6 mb-2" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:-400px;">
                <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                            <!-- <i class="fa fa-2x fa-taxi text-secondary"></i> -->
                            <img class="img-fluid ml-n4" style="margin-right:-20px" src="{{ asset('images/userserviceimg/'.$servicetype->image) }}" alt="">
                        </div>
                        <h1 class="display-2 text-white mt-n2 m-0">{{$servicetype->id}}</h1>
                    </div>
                    <h4 class="text-uppercase mb-3">{{$servicetype->type}}</h4>
                    <p class="m-0" style="font-weight:400;">{{$servicetype->description}}</p>
                </div>
            </div>
            @empty
            <div class="">
                <h5>No Service Available</h5>
            </div>
            @endforelse
            <!-- <div class="col-lg-4 col-md-6 mb-2">
                <div class="service-item active d-flex flex-column justify-content-center px-4 mb-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                            <i class="fa fa-2x fa-money-check-alt text-secondary"></i>
                        </div>
                        <h1 class="display-2 text-white mt-n2 m-0">02</h1>
                    </div>
                    <h4 class="text-uppercase mb-3">Car Financing</h4>
                    <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                            <i class="fa fa-2x fa-car text-secondary"></i>
                        </div>
                        <h1 class="display-2 text-white mt-n2 m-0">03</h1>
                    </div>
                    <h4 class="text-uppercase mb-3">Car Inspection</h4>
                    <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                            <i class="fa fa-2x fa-cogs text-secondary"></i>
                        </div>
                        <h1 class="display-2 text-white mt-n2 m-0">04</h1>
                    </div>
                    <h4 class="text-uppercase mb-3">Auto Repairing</h4>
                    <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                            <i class="fa fa-2x fa-spray-can text-secondary"></i>
                        </div>
                        <h1 class="display-2 text-white mt-n2 m-0">05</h1>
                    </div>
                    <h4 class="text-uppercase mb-3">Auto Painting</h4>
                    <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                            <i class="fa fa-2x fa-pump-soap text-secondary"></i>
                        </div>
                        <h1 class="display-2 text-white mt-n2 m-0">06</h1>
                    </div>
                    <h4 class="text-uppercase mb-3">Auto Cleaning</h4>
                    <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- Services End -->


<!-- Banner Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="bg-banner py-5 px-4 text-center">
            <div class="py-5" data-center-center="opacity:1;bottom:0;" data-0-bottom="opacity:0;bottom:-400px;">
                @forelse($data as $datas)
                    <h1 class="display-1 text-uppercase text-primary mb-4">{{$datas->discount}}% OFF</h1>
                    <h1 class="text-uppercase text-light mb-4">{{$datas->disc}}</h1>
                    <h3 class="text- text-light mb-4">Use Code:{{$datas->code}}</h3>
                    <p class="mb-4" style="font-weight:400;">{{$datas->limit}}</p>
                    <a class="btn btn-primary mt-2 py-3 px-5" href="{{ url('users/register') }}">Register Now</a>
                    @empty
                    <div class="">
                        <h5 style="color:white;">No offer Available</h5>
                    </div>
                @endforelse 
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->


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