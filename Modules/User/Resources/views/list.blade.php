@extends('user::layouts.master')

@section('content')

<style>
    p {
        font-weight:400;
    }
</style>

<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3" data-0-top="opacity:0;left:100px;" data-200-top="opacity:1;left:0px;">Car Listing</h1>
    <div class="d-inline-flex text-white" data-0-top="opacity:0;left:100px;" data-200-top="opacity:1;left:0px;">
        <h6 class="text-uppercase m-0"><a class="text-white" href="{{ url('users/') }}">Home</a></h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0" style="font-weight:400;">Car Listing</h6>
    </div>
</div>
<!-- Page Header Start -->


<!-- Rent A Car Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <h1 class="display-4 text-uppercase text-center mb-5" data-center-center="opacity:1;top:0;" data-0-bottom="opacity:0;top:-500px;">Find Your Car</h1>
        <div class="row">
       
            @foreach($query as $members)
            <div class="col-lg-4 col-md-6 mb-2" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:-400px;">
                <!-- brand_id add -->
                <div class="rent-item mb-4">
                    <a href="" data-toggle="modal" id="btn-block" data-target="#editmodal" value="{{ $members->id}}">
                        <img class="img-fluid w-100" src="{{asset('images/car/'.$members->car_image->img_path)}}">
                    </a>
                    <h4 class="text-uppercase mb-4 mt-4">{{$members->name}}</h4>
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

                </div>
            </div>
            @endforeach

        </div>
    </div>

</div>


<div class="modal fade bd-example-modal-lg" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" >
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
                    <div class="col-md-3 col-6 mb-2 ml-3">
                        <i class="fa fa-car text-primary mr-2"></i>
                        <div class="model">
                        </div>
                    </div>

                    <div class="col-md-3 col-6 mb-2 ml-3">
                        <i class="fa fa-cogs text-primary mr-2"></i>
                        <div class="type">
                        </div>
                    </div>

                    <div class="col-md-3 col-6 mb-2 ml-3">
                        <i class="fa fa-road text-primary mr-2"></i>
                        <div class="average">
                        </div>
                    </div>

                    <div class="col-md-3 col-6 mb-2 ml-3">
                        <i class="fa-solid fa-record-vinyl text-primary mr-2"></i>
                        <div class="amount">

                        </div>
                    </div>
                    
                    <div class="col-md-3 col-6 mb-2 ">
                        <div class="gps">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-secondary" data-dismiss="modal" value="close">
                    <!-- <input class="btn btn-primary" type="submit" name="Submit" value="Submit"> -->
                </div> 
        </div>
    </div>
</div>

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