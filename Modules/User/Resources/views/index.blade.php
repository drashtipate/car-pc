@extends('user::layouts.master')

@section('content')
<style>
    p {
        font-weight: 400 !important;
    }
</style>

<!-- Carousel Start -->
<div class="container-fluid p-0" style="margin-bottom: 90px;">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            @php $i = 1; @endphp
            @forelse ($label as $lbltype)
                <div class="carousel-item {{ $i == '1' ? 'active':'' }}">
                    @php  $i++; @endphp
                    <img class="d-block w-100" src="{{ asset('images/label/'.$lbltype->image) }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;" >
                            <h4 class="text-white text-uppercase mb-md-3">{{ $lbltype->label1 }}</h4>
                            <h1 class="display-1 text-white mb-md-4">{{ $lbltype->label2 }}</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Reserve Now &#x27F6;</a>
                        </div>
                    </div>
                </div>
                
                @empty
                <div class="">
                    <h5>No  Available</h5>
                </div>
            @endforelse
        </div>

        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-dark" style="width: 45px; height: 45px; padding: 6px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-dark" style="width: 45px; height: 45px; padding: 6px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>
    </div>
</div>


<!-- <div class="container-fluid p-0" style="margin-bottom: 90px;">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{asset('user/img/carousel-1.jpg')}}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;" data-0-top="opacity:0;left:100px;" data-200-top="opacity:1;left:0px;">
                        <h4 class="text-white text-uppercase mb-md-3">Rent A Car</h4>
                        <h1 class="display-1 text-white mb-md-4">Best Rental Cars In Your Location</h1>
                        <a href="{{url('users/register')}}" class="btn btn-primary py-md-3 px-md-5 mt-2">Reserve Now &#x27F6;</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{asset('user/img/carousel-2.jpg')}}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">Rent A Car</h4>
                        <h1 class="display-1 text-white mb-md-4">Quality Cars with Unlimited Miles</h1>
                        <a href="{{url('users/register')}}" class="btn btn-primary py-md-3 px-md-5 mt-2">Reserve Now &#x27F6;</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-dark" style="width: 45px; height: 45px; padding: 6px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-dark" style="width: 45px; height: 45px; padding: 6px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>
    </div>
</div> -->
<!-- Carousel End -->

<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <h1 class="display-1 text-primary text-center" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:500px;">01</h1>
        <h1 class="display-4 text-uppercase text-center mb-5" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:-500px;">Welcome To <span class="text-primary">Royal Cars</span></h1>
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <img class="w-75 mb-4" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:200px;" src="{{asset('user/img/about.png')}}" alt="">
                <p data-center-center="opacity:1;right:0;" data-0-bottom="opacity:1;right:500px;">Justo et eos et ut takimata sed sadipscing dolore lorem, et elitr labore labore voluptua no rebum sed, stet voluptua amet sed elitr ea dolor dolores no clita. Dolores diam magna clita ea eos amet, amet rebum voluptua vero vero sed clita accusam takimata. Nonumy labore ipsum sea voluptua sea eos sit justo, no ipsum sanctus sanctus no et no ipsum amet, tempor labore est labore no. Eos diam eirmod lorem ut eirmod, ipsum diam sadipscing stet dolores elitr elitr eirmod dolore. Magna elitr accusam takimata labore, et at erat eirmod consetetur tempor eirmod invidunt est, ipsum nonumy at et.</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-4 mb-2" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:-400px;">
                <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                        <i class="fa fa-2x fa-headset text-secondary"></i>
                    </div>
                    <h4 class="text-uppercase m-0">24/7 Car Rental Support</h4>
                </div>
            </div>
            <div class="col-lg-4 mb-2" data-center-center="opacity:1;bottom:0;" data-0-bottom="opacity:0;bottom:-400px;">
                <div class="d-flex align-items-center bg-secondary p-4 mb-4" style="height: 150px;">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                        <i class="fa fa-2x fa-car text-secondary"></i>
                    </div>
                    <h4 class="text-light text-uppercase m-0">Car Reservation Anytime</h4>
                </div>
            </div>
            <div class="col-lg-4 mb-2" data-center-center="opacity:1;right:0;" data-0-bottom="opacity:0;right:-400px;">
                <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                        <i class="fa fa-2x fa-map-marker-alt text-secondary"></i>
                    </div>
                    <h4 class="text-uppercase m-0">Lots Of Pickup Locations</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Services Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <h1 class="display-1 text-primary text-center" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:500px;">02</h1>
        <h1 class="display-4 text-uppercase text-center mb-5" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:-500px;">Our Services</h1>
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
                        <p class="m-0">{{$servicetype->description}}</p>
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
                    <p class="mb-4">{{$datas->limit}}</p>
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

<!-- Rent A Car Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <h1 class="display-1 text-primary text-center" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:500px;">03</h1>
        <h1 class="display-4 text-uppercase text-center mb-5" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:-500px;">Find Your Car</h1>
        <div class="row">
            @foreach($query as $members)
            <div class="col-lg-4 col-md-6 mb-2" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:-400px;">
                <!-- brand_id -->
                <div class="rent-item mb-4">
                        <img class="img-fluid w-100" src="{{asset('images/car/'.$members->car_image->img_path)}}">
                    
                    
                        <h4 class="text-uppercase mt-4 mb-4">{{$members->name}}</h4>
                    
                    <div class="d-flex justify-content-center mb-4">
                        <div class="px-2">
                            <i class="fa fa-car text-primary mr-1"></i>
                            <span>{{$members->model}} </span>
                        </div>
                        <div class="px-2 border-left border-right">
                            <i class="fa fa-cogs text-primary mr-1"></i>
                            <span>{{$members->type}}</span>
                        </div>
                        <div class="px-2">
                            <i class="fa fa-road text-primary mr-1"></i>
                            <span>{{$members->average}}</span>
                        </div>

                    </div>

                    <button class="btn btn-primary px-3 " data-toggle="modal" id="btn-block" data-target="#editmodal" value="{{ $members->id}}">₹{{$members->amount}}/PER Hour</button>
                    <!-- <p class="btn btn-primary">₹{{$members->amount}}/PER Hour</p> -->

                </div>
            </div>
            @endforeach

        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Car Details</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
					</button>
				</div>

				<input type="hidden" id="stud_id" name="stud_id">
				<div class="name ml-3">
				</div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="img_path ml-3"> </div>
                    </div>
                    <div class="col-md-6">
                        <div class="description mr-3"></div>
                    </div>
                </div>
                    
				<div class="row pt-4">
					<div class="col-md-3 col-6 mb-2 ml-4">
						<i class="fa fa-car text-primary mr-2"></i>
						<div class="model">
						</div>
					</div>

					<div class="col-md-3 col-6 mb-2 ml-4">
						<i class="fa fa-cogs text-primary mr-2"></i>
						<div class="type">
						</div>
					</div>

					<div class="col-md-3 col-6 mb-2 ml-4">
						<i class="fa fa-road text-primary mr-2"></i>
						<div class="average">
						</div>
					</div>

					<div class="col-md-3 col-6 mb-2 ml-4">
						<i class="fa-solid fa-record-vinyl text-primary mr-2"></i>
						<div class="amount">
						</div>
					</div>

                    <div class="col-md-3 col-6 mb-2">
                        <div class="gps">
                        </div>
                    </div>
				</div>
            <!-- <input type="text" id="model" name="model"> -->
            <!-- <input type="text" id="type" name="type">
            <input type="text" id="average" name="average">
            <input type="text" id="amount" name="amount">
            <input type="text" id="gps" name="gps"> -->
				<div class="modal-footer">
					<button type="submit" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>

				</div>

			</div>
		</div>
	</div>
</div>
<!-- Rent A Car End -->

<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <h1 class="display-1 text-primary text-center" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:500px;">04</h1>
        <h1 class="display-4 text-uppercase text-center mb-5" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:-500px;">Meet Our Team</h1>
        <div class="owl-carousel team-carousel position-relative" style="padding: 0 30px;">

            @forelse ($team as $teamitem)
                <div class="team-item">
                    <img class="img-fluid w-100" src="{{ asset('images/userteamimg/'.$teamitem->image) }}" alt="">
                    <div class="position-relative py-4">
                        <h4 class="text-uppercase">{{$teamitem->name}}</h4>
                        <p class="m-0">{{$teamitem->designation}}</p>
                        <div class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="">
                    <h5>No Team Available</h5>
                </div>
            @endforelse
            <!-- <div class="team-item">
                <img class="img-fluid w-100" src="{{asset('user/img/team-2.jpg')}}" alt="">
                <div class="position-relative py-4">
                    <h4 class="text-uppercase">Full Name</h4>
                    <p class="m-0">Designation</p>
                    <div class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                        <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <img class="img-fluid w-100" src="{{asset('user/img/team-3.jpg')}}" alt="">
                <div class="position-relative py-4">
                    <h4 class="text-uppercase">Full Name</h4>
                    <p class="m-0">Designation</p>
                    <div class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                        <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <img class="img-fluid w-100" src="{{asset('user/img/team-4.jpg')}}" alt="">
                <div class="position-relative py-4">
                    <h4 class="text-uppercase">Full Name</h4>
                    <p class="m-0">Designation</p>
                    <div class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                        <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- Team End -->

<!-- Banner Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row mx-0">
            <div class="col-lg-6 px-0" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:-400px;">
                <div class="px-5 bg-secondary d-flex align-items-center justify-content-between" style="height: 350px;">
                    <img class="img-fluid flex-shrink-0 ml-n5 w-50 mr-4" src="{{asset('user/img/banner-left.png')}}" alt="">
                    <div class="text-right">
                        <h3 class="text-uppercase text-light mb-3">Want to be driver?</h3>
                        <p class="mb-4">Lorem justo sit sit ipsum eos lorem kasd, kasd labore</p>
                        <a class="btn btn-primary py-2 px-4" href="">Start Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 px-0" data-center-center="opacity:1;right:0;" data-0-bottom="opacity:0;right:-400px;">
                <div class="px-5 bg-dark d-flex align-items-center justify-content-between" style="height: 350px;">
                    <div class="text-left">
                        <h3 class="text-uppercase text-light mb-3">Looking for a car?</h3>
                        <p class="mb-4">Lorem justo sit sit ipsum eos lorem kasd, kasd labore</p>
                        <a class="btn btn-primary py-2 px-4" href="">Start Now</a>
                    </div>
                    <img class="img-fluid flex-shrink-0 mr-n5 w-50 ml-4" src="{{asset('user/img/banner-right.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->

<!-- Testimonial Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <h1 class="display-1 text-primary text-center" data-center-center="opacity:1;top:0;" data-0-bottom="opacity:0;top:-100px;">05</h1>
        <h1 class="display-4 text-uppercase text-center mb-5" data-center-center="opacity:1;bottom:0;" data-0-bottom="opacity:0;bottom:-100px;">Our Client's Say</h1>
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <img class="img-fluid ml-n4" src="{{asset('user/img/testimonial-1.jpg')}}" alt="">
                    <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                </div>
                <h4 class="text-uppercase mb-2">John Doe</h4>
                <i class="mb-2">Chicago</i>
                <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
            </div>
            <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <img class="img-fluid ml-n4" src="{{asset('user/img/testimonial-2.jpg')}}" alt="">
                    <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                </div>
                <h4 class="text-uppercase mb-2">Vivienne Doe</h4>
                <i class="mb-2">User Interface & Interaction</i>
                <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
            </div>
            <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <img class="img-fluid ml-n4" src="{{asset('user/img/testimonial-3.jpg')}}" alt="">
                    <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                </div>
                <h4 class="text-uppercase mb-2">Tima Doe</h4>
                <i class="mb-2">Dallas</i>
                <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
            </div>
            <div class="testimonial-item d-flex flex-column justify-content-center px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <img class="img-fluid ml-n4" src="{{asset('user/img/testimonial-4.jpg')}}" alt="">
                    <h1 class="display-2 text-white m-0 fa fa-quote-right"></h1>
                </div>
                <h4 class="text-uppercase mb-2">John McCain</h4>
                <i class="mb-2">Service Advisor</i>
                <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed</p>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <h1 class="display-1 text-primary text-center" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:-400px;">06</h1>
        <h1 class="display-4 text-uppercase text-center mb-5" data-center-center="opacity:1;right:0;" data-0-bottom="opacity:0;right:-400px;">GET IN TOUCH WITH US</h1>
        <div class="row">
            <div class="col-lg-7 mb-2">
                        @if (session()->has('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session()->get('message') }}
                            </div>
                        @elseif (session()->has('error'))
                            <div class="alert alert-denger" role="alert">
                                {{ session()->get('error') }}
                            </div>
                        @endif
                <div class="contact-form bg-light mb-4" style="padding: 30px;">
                    <form class="form-horizontal" action="{{ url('users/contactus')}}" method="post"  enctype="multipart/form-data" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:-400px;">
                         @csrf
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <div class="form-group af-inner has-icon">
                                    <input type="text" class="form-control p-4" name="name" placeholder="Your Name" >
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
                                    <input type="email" class="form-control p-4" name="emailId" placeholder="Your Email" >
                                        <span class="form-control-icon">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                        @error('emailId')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group af-inner has-icon">
                                <input type="text" class="form-control p-4" name="contactnumber" placeholder="Phone Number" >
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
                                <textarea class="form-control py-3 px-4" rows="5" name="message" placeholder="Message" ></textarea>
                                    <span class="form-control-icon">
                                        <i class="fa fa-bars"></i>
                                    </span>
                                    @error('message')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary py-3 px-5" type="submit">Send Message  &#x27F6;</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-2">
                <div class="bg-secondary d-flex flex-column justify-content-center px-5 mb-4" style="height: 435px;">
                    
                @forelse ($contactus as $contact)
                    <div class="d-flex mb-3">
                        <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                        <div class="mt-n1">
                            <h5 class="text-light">Head Office</h5>
                            <p>{{$contact->headoffice}}</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                        <div class="mt-n1">
                            <h5 class="text-light">Branch Office</h5>
                            <p>{{$contact->branchoffice}}</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3"></i>
                        <div class="mt-n1">
                            <h5 class="text-light">Email Id</h5>
                            <!-- <p>customer@example.com</p> --><a href="mailto:" style="text-decoration:none;">{{$contact->emailId}}</a>
                        </div>
                    </div>
                    <div class="d-flex">
                        <i class="fa fa-2x fa-phone text-primary flex-shrink-0 mr-3"></i>
                        <div class="mt-n1">
                            <h5 class="text-light">Support Phone</h5>
                            <!-- <p class="m-0">refund@example.com</p> --><a href="tel:tel" style="text-decoration:none;">{{$contact->contactno}}</a>
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

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $(document).on('click', '#btn-block', function() {
            var stud_id = $(this).val();
            $('#editmodal').modal('show');
            // alert(stud_id);
            $.ajax({
                type: 'POST',
                url: "/users/changes/" + stud_id,
                data: {
                    "_token": "{{ csrf_token() }}",

                },
                success: function(response) {
                    // console.log(response);   
                    $('#stud_id').val(stud_id);
                    $('.name').html('<h1 class="display-4 text-uppercase mb-5">' + response.car.name + '</h1>');
                    $('.model').html('<span >model:' + response.car.model + '</span>');
                    $('.type').html('<span>' + response.car.type + '</span>');
                    $('.average').html('<span>' + response.car.average + '</span>');
                    $('.amount').html('<span>₹' + response.car.amount + '/Per Hour</span>');
                    $('.gps').html(' <div class="col-md-2.5 col-6 mb-2"><i class="fa fa-eye text-primary mr-2"></i><span>' + response.car.gps + '</span></div>');
                    $('.description').html('<p>' + response.car.description + '</p>');

                    if (response.query.img_path) {

                        $('.img_path').html('<img src="' + '/images/car/' + response.query.img_path + '" style="width: 100%;"/>');

                    }



                }
            })
        });
    });
</script>
@endsection