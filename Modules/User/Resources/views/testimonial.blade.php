@extends('user::layouts.master')

@section('content')
@php
$member = \App\helper\helper::get_cars()
@endphp
    
<style>
    p {
        font-weight:400;
    }
</style>


<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3" data-0-top="opacity:0;right:100px;" data-200-top="opacity:1;right:0px;">Testimonial</h1>
    <div class="d-inline-flex text-white" data-0-top="opacity:0;right:100px;" data-200-top="opacity:1;right:0px;">
        <h6 class="text-uppercase m-0"><a class="text-white" href="{{ url('users/') }}">Home</a></h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0" style="font-weight:400;">Testimonial</h6>
    </div>
</div>
<!-- Page Header Start -->

<!-- Testimonial Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <h1 class="display-4 text-uppercase text-center mb-5" data-center-center="opacity:1;top:0;" data-0-bottom="opacity:0;top:-400px;">Our Client's Say</h1>
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <img class="img-fluid ml-n4" src="{{asset('user/img/testimonial-1.jpg')}}" alt="">
                    <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                </div>
                <h4 class="text-uppercase mb-2" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:-400px;">John Doe</h4>
                <i class="mb-2">Chicago</i>
                <p class="m-0" data-center-center="opacity:1;right:0;" data-0-bottom="opacity:0;right:-400px;">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
            </div>

            <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <img class="img-fluid ml-n4" src="{{asset('user/img/testimonial-2.jpg')}}" alt="">
                    <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                </div>
                <h4 class="text-uppercase mb-2" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:-400px;">Vivienne Doe</h4>
                <i class="mb-2">User Interface & Interaction</i>
                <p class="m-0" data-center-center="opacity:1;right:0;" data-0-bottom="opacity:0;right:-400px;">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
            </div>

            <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <img class="img-fluid ml-n4" src="{{asset('user/img/testimonial-3.jpg')}}" alt="">
                    <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                </div>
                <h4 class="text-uppercase mb-2" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:-400px;">Tima Doe</h4>
                <i class="mb-2">Dallas</i>
                <p class="m-0" data-center-center="opacity:1;right:0;" data-0-bottom="opacity:0;right:-400px;">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
            </div>

            <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <img class="img-fluid ml-n4" src="{{asset('user/img/testimonial-4.jpg')}}" alt="">
                    <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                </div>
                <h4 class="text-uppercase mb-2" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:-400px;">John McCain</h4>
                <i class="mb-2">Service Advisor</i>
                <p class="m-0" data-center-center="opacity:1;right:0;" data-0-bottom="opacity:0;right:-400px;">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End --> 

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

