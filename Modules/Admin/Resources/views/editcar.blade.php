@extends('admin::layouts.master')

@section('content')


<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">


    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- Bread crumb and right sidebar toggle -->
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <div class="d-inline-flex text-white">
                        <h6 class="text m-0">
                            <a href="{{ url ('mmladmin/home') }}" style="color:rgba(0, 0, 0, 0.5)">Dashboard</a>
                        </h6>
                        <h6 class="text-body m-0 px-3">/</h6>
                        <h6 class="page-title" style="color:#8486A0; font-size:0.875rem">Edit Car</h4>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <div class="d-md-flex">
                        <ol class="breadcrumb ms-auto">
                            <!-- <li><a href="#" class="fw-normal">Dashboard</a></li> -->
                        </ol>
                        <a href="" target="_blank" class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Upgrade
                            to Pro</a>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- End Bread crumb and right sidebar toggle -->


        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title">UPDATE CAR</h3>
                        <form class="form-horizontal" action="{{ url('mmladmin/car/view/update/'.$data->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="add_state" class="col-sm-2 control-label">Car Name</label>
                                <input id="add_car" type="text" name="name" value="{{ $data->name }}">

                            </div>

                            <div class="form-group">
                                <label for="state" class="col-sm-2 control-label">Brand</label>
                                <select id="state-dropdown" name="brand_id">
                                    <option value="">-- Select Brand --</option>
                                    @foreach ($brands as $brand)
                                    <option @selected($brand->id == $data->brand_id)  value="{{ $brand->id }}" >{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="state" class="col-sm-2 control-label">Type</label>
                                <select id="car_type" name="type">
                                    <option value="">-- Select Type --</option>
                                    <option value="Automatic" {{ $data->type == 'Automatic' ? 'selected' : '' }}>Automatic</option>
                                    <option value="Manual" {{ $data->type == 'Manual' ? 'selected' : '' }}>Manual</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="add_city" class="col-sm-2 control-label">Model</label>
                                        <input id="add_city" type="text" name="model" value="{{ $data->model }}">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="add_city" class="col-sm-2 control-label">Average</label>
                                        <input id="add_city" type="text" name="average" value="{{ $data->average }}">

                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="add_city" class="col-sm-2 control-label">GPS</label>
                                        <input id="add_city" type="text" name="gps" value="{{ $data->gps }}">

                                    </div>
                                    <div class="col-sm-6">
                                        <label for="add_city" class="col-sm-2 control-label">Amount</label>
                                        <input id="add_city" type="text" name="amount" value="{{ $data->amount }}">

                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="add_state" class="col-sm-2 control-label">Description/About Car</label>
                                <textarea rows="5" cols="50" id="add_about" type="text" name="description">{{ $data->description}}</textarea>

                            </div>

                            <!-- <form action="{{ url('mmladmin/car/view/update-image') }}" method="post"  enctype="multipart/form-data">
                                 
                                  @csrf -->
                            <div class="form-group">
                                <div class="upload__box">
                                    <div class="upload__btn-box">
                                        <label class="upload__btn">
                                            <p>Upload images</p>
                                            <input type="file" id="images" data-max_length="20" class="upload__inputfile" name="photos[]" multiple>

                                        </label>
                                    </div>


                                    <div class="upload__img-wrap"></div>

                                    @foreach($data->car_images as $member)
                                    <img src="{{asset('images/car/'.$member->img_path)}}" alt="multiple show" class="img-fluid" style="width:200px; height:150px">
                                    <!-- <img src="{{ asset('admin/plugins/images/car/Audi Q3_CAR_2.jpg'.$data->image) }}" alt="user" style="width:200px; height:200px" class="img-fluid"> -->
                                    @endforeach
                                </div>
                            </div>
                            <!-- </form> -->

                            <div class="form-group">
                                <input class="submit" type="submit" name="Submit" value="Update">
                                <a href="{{ url('mmladmin/carview') }}" class="submit-back me-1 mb-1">Back</a>
                            </div>
                        </form>



                    </div>
                </div>
            </div>

        </div>

        <!-- End Container fluid  -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>



<script>
    jQuery(document).ready(function() {
        ImgUpload();
    });

    function ImgUpload() {
        var imgWrap = "";
        var imgArray = [];

        $('.upload__inputfile').each(function() {
            $(this).on('change', function(e) {
                imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
                var maxLength = $(this).attr('data-max_length');

                var files = e.target.files;
                var filesArr = Array.prototype.slice.call(files);
                var iterator = 0;
                filesArr.forEach(function(f, index) {

                    if (!f.type.match('image.*')) {
                        return;
                    }

                    if (imgArray.length > maxLength) {
                        return false
                    } else {
                        var len = 0;
                        for (var i = 0; i < imgArray.length; i++) {
                            if (imgArray[i] !== undefined) {
                                len++;
                            }
                        }
                        if (len > maxLength) {
                            return false;
                        } else {
                            imgArray.push(f);

                            var reader = new FileReader();
                            reader.onload = function(e) {
                                var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                                imgWrap.append(html);
                                iterator++;
                            }
                            reader.readAsDataURL(f);
                        }
                    }
                });
            });
        });

        $('body').on('click', ".upload__img-close", function(e) {
            var file = $(this).parent().data("file");
            for (var i = 0; i < imgArray.length; i++) {
                if (imgArray[i].name === file) {
                    imgArray.splice(i, 1);
                    break;
                }
            }
            $(this).parent().parent().remove();
        });
    }


    //   // 
</script>
@endsection