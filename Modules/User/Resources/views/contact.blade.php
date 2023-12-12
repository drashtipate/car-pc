@extends('user::layouts.master')

@section('content')

<style>
    p {
        font-weight:400;
    }
</style>


<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3" data-0-top="opacity:0;left:100px;" data-200-top="opacity:1;left:0px;">Contact</h1>
    <div class="d-inline-flex text-white" data-0-top="opacity:0;left:100px;" data-200-top="opacity:1;left:0px;">
        <h6 class="text-uppercase m-0"><a class="text-white" href="{{ url('users/') }}">Home</a></h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0">Contact</h6>
    </div>
</div>
<!-- Page Header Start -->

<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <h1 class="display-4 text-uppercase text-center mb-5" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:500px;">Contact Us</h1>
        <div class="row">
            <div class="col-lg-7 mb-2">
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
                <div class="contact-form bg-light mb-4" style="padding: 30px;">
                    <form class="form-horizontal" action="{{ url('users/contactus')}}" method="post" enctype="multipart/form-data" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:-500px;">
                        @csrf

                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <div class="form-group af-inner has-icon">
                                    <input type="text" class="form-control p-4" name="name" placeholder="Your Name">
                                    <span class="form-control-icon">
                                        <i class="fa fa-user"></i>
                                    </span>
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 form-group">
                                <div class="form-group af-inner has-icon">
                                    <input type="email" class="form-control p-4" name="email" placeholder="Your Email">
                                    <span class="form-control-icon">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group af-inner has-icon">
                                <input type="text" class="form-control p-4" name="contactnumber" placeholder="Phone Number">
                                <span class="form-control-icon">
                                    <i class="fa fa-phone"></i>
                                </span>
                                @error('contactnumber')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group af-inner has-icon">
                                <textarea class="form-control py-3 px-4" rows="5" name="message" placeholder="Message"></textarea>
                                <span class="form-control-icon">
                                    <i class="fa fa-bars"></i>
                                </span>
                                @error('message')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary py-3 px-5" type="submit">Send Message &#x27F6;</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-2"> <!-- style="background-color: #F4F5F8 !important;"-->
                <div class="bg-secondary d-flex flex-column justify-content-center px-5 mb-4" style="height: 435px;" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:200px;">

                    @forelse ($contactus as $contact)
                        <div class="d-flex mb-3">
                            <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Head Office</h5>
                                <p>{{ $contact->headoffice }}</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Branch Office</h5>
                                <p>{{ $contact->branchoffice }}</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Email Id</h5>
                                <!-- <p>customer@example.com</p> --><a href="mailto:" style="text-decoration:none;">{{ $contact->emailId }}</a>
                            </div>
                        </div>
                        <div class="d-flex">
                            <i class="fa fa-2x fa-phone text-primary flex-shrink-0 mr-3"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Telephone</h5>
                                <!-- <p class="m-0">refund@example.com</p> --><a href="mailto:" style="text-decoration:none;">{{ $contact->contactno }}</a>
                            </div>
                        </div>
                    @empty
                    <div class="">
                        <h5>No Information Available</h5>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<!-- Vendor Start -->
<!-- <div class="container-fluid py-5">
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
</div> -->
<!-- Vendor End -->

    <!-- <div class="container pt-5 pb-3"> -->
        <div class="row">
            <div class="col-md-12">
                <div id="googlemap" style="width:100%; height:30rem;">
                    <iframe style="width:100%; height:600px; filter: brightness( 67% ) contrast( 138% ) saturate( 74% ) blur( 0.1px ) hue-rotate( 0deg );" loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119066.41709462953!2d72.73989528744846!3d21.15934029865542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e59411d1563%3A0xfe4558290938b042!2sSurat%2C%20Gujarat%2C%20India!5e0!3m2!1sen!2sus!4v1681983107961!5m2!1sen!2sus" title="Varacha, Surat, Gujarat, India" aria-label="Varacha, Surat, Gujarat, India"></iframe>
                </div>
            </div>
            
        </div>
    <!-- </div> -->

@endsection

