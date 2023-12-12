@extends('user::layouts.master')

@section('content')

<style>
    p {
        font-weight: 400 !important;
    }
</style>


<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3" data-0-top="opacity:0;left:100px;" data-200-top="opacity:1;left:0px;">Car Detail</h1>
    <div class="d-inline-flex text-white" data-0-top="opacity:0;left:100px;" data-200-top="opacity:1;left:0px;">
        <h6 class="text-uppercase m-0"><a class="text-white" href="{{ url('users/') }}">Home</a></h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0">Car Detail</h6>
    </div>
</div>
<!-- Page Header Start -->


<!-- Detail Start -->
<div class="container-fluid pt-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-8 mb-5">

                <input type="hidden" name="id" value="{{$data->id}}">
                <h1 class="display-4 text-uppercase mb-5">{{$data->name}} </h1>

                @foreach($data->car_images as $member)
                <img class="img-fluid w-25" src="{{asset('images/car/'.$member->img_path)}}">
                @endforeach
                
                <p class="mt-3">{{$data->description}}</p>
                <div class="row pt-2 mt-3">
                    <div class="col-md-4 col-6 mb-2">
                        <i class="fa fa-car text-primary mr-2"></i>
                        <span>{{$data->model}} </span>
                    </div>
                    <div class="col-md-4 col-6 mb-2">
                        <i class="fa fa-cogs text-primary mr-2"></i>
                        <span>{{$data->type}} </span>
                    </div>
                
                    <div class="col-md-4 col-6 mb-2">
                        <i class="fa fa-road text-primary mr-2"></i>
                        <span>{{$data->average}} </span>
                    </div>
                
                    <div class="col-md-4 col-6 mb-2">
                        <i class="fa-solid fa-record-vinyl text-primary mr-2"></i>
                        <span>{{$data->brands->name}}</span>
                    </div>
                
                    <div class="col-md-2.5 col-6 mb-2">
                        <i class="fa fa-eye text-primary mr-2"></i>
                        <span>{{$data->gps}} </span>
                    </div>



                </div>

            </div>
            <!-- </form> -->
            <div class="col-lg-4 mb-5">
                <div class="bg-secondary p-5">
                    <!-- <form action="{{url('users/check')}}" method="post"> -->
                  
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <h3 class="text-primary text-center mb-4">Check Availability</h3>
                        <div class="form-group">
                            <div class="date" id="date3" data-target-input="nearest">
                                <input type="text" name="pickup" class="form-control p-4" value="{{$detail->area}},{{$detail->pincode}},{{$detail->cityes->name}},{{$detail->state->name}},{{$detail->country->name}}">
                            </div>
                        </div>

                        <!-- <select class="custom-select px-4" name="pickups" style="height: 50px;">
                                <option selected>Pickup Location</option>
                                @foreach(App\Models\pincode::with(['country','state','cityes'])->get() as $members)
                                <option value="{{$members->area}},{{$members->pincode}},{{$members->cityes->name}},{{$members->state->name}},{{$members->country->name}}">{{$members->area}},{{$members->pincode}},
                                    {{$members->cityes->name}},{{$members->state->name}},{{$members->country->name}}
                                </option>
                                @endforeach
                            </select> -->

                        <div class="form-group">
                            <div class="date" id="date3" data-target-input="nearest">
                                <input type="text" name="drop" class="form-control p-4 " value="{{$details->area}},{{$details->pincode}},{{$details->cityes->name}},{{$details->state->name}},{{$details->country->name}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="date" id="date3" data-target-input="nearest">
                                <input type="text" name="hour" class="form-control p-4 " value="{{session('ptime')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="time" id="time3" data-target-input="nearest">
                                <input type="text" name="ptime" class="form-control p-4" value="{{session('dtime')}}" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="time" id="time3" data-target-input="nearest">
                                <input type="text" name="dtime" class="form-control p-4" value="{{session('diff_in_hours')}} hours" />
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <select class="custom-select px-4" name="person" style="height: 50px;">
                                <option selected>Select Person</option>
                                <option value="1">Person 1</option>
                                <option value="2">Person 2</option>
                                <option value="3">Person 3</option>
                            </select>
                        </div> -->
                        <div class="form-group mb-0">
                           <a href=" {{ url('users/booking/'.Request::segment(3)) }}"> <button class="btn btn-primary btn-block" type="submit" style="height: 50px;"> Book Now </button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Detail End -->


<!-- Related Car Start -->
<div class="container-fluid pb-5">
    <div class="container pb-5">
        <h2 class="mb-4">Related Cars</h2>

        <div class="owl-carousel related-carousel position-relative" style="padding: 0 30px;">

            @foreach($query as $members)
            <div class="rent-item">
                <img class="img-fluid w-100" src="{{asset('images/car/'.$members->car_image->img_path)}}">
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

                <a class="btn btn-primary px-3" href="{{"./".$members['id']}}">₹{{$members->amount}}/PER Hour</a>

            </div>
            @endforeach
        </div>

    </div>
</div>
<!-- Related Car End -->

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

<script>
    $(document).ready(function() {
        $('#country-dropdown').on('change', function() {
            var cid = $(this).val();
            $.ajax({
                url: "/mmladmin/getState",
                type: 'post',
                data: 'cid=' + cid + '&_token={{csrf_token()}}',
                dataType: 'json',
                success: function(result) {
                    //console.log(result);

                    $('#state-dropdown').find('option:not(:first)').remove();
                    if (result['states'].length > 0) {
                        $.each(result['states'], function(key, value) {
                            $('#state-dropdown').append("<option value='" + value['id'] + "'>" + value['name'] + "</Option>")
                        })
                    }
                }
            });
        });
    });
</script>
@endsection