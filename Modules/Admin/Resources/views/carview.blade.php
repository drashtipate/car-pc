@extends('admin::layouts.master')

@section('content')


<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
   

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
                        <h6 class="page-title" style="color:#8486A0; font-size:0.875rem">Manage Car</h4>
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
                <!-- <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">location</h3> -->
                            
                            <!-- Modal add brand -->
                            <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Car</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" action="{{ url('mmladmin/cars')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="add_state" class="col-sm-2 control-label">Car Name</label>
                                                    <input id="add_car" type="text" name="name" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="state" class="col-sm-2 control-label">Brand</label>
                                                    <select id="state-dropdown" name="brand" required>
                                                            <option value="">-- Select Brand --</option>
                                                                @foreach ($brands as $brand)
                                                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                                @endforeach
                                                    </select>
                                            </div>


                                            <div class="form-group">
                                                <label for="state" class="col-sm-2 control-label">Type</label>
                                                    <select id="car_type" name="type" required>
                                                        <option value="">-- Select Type --</option>
                                                        <option value="Automatic">Automatic</option>
                                                        <option value="Manual">Manual</option>
                                                    </select>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label for="add_city" class="col-sm-2 control-label">Model</label>
                                                            <input id="add_city" type="text" name="Models" required>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="add_city" class="col-sm-2 control-label">Average</label>
                                                            <input id="add_city" type="text" name="average" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label for="add_city" class="col-sm-2 control-label">GPS</label>
                                                            <input id="add_city" type="text" name="gps" required>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="add_city" class="col-sm-2 control-label">Price</label>
                                                            <input id="add_city" type="text" name="amount" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="add_state" class="col-sm-2 control-label">Description/About Car</label>
                                                    <textarea rows="5" cols="50" id="add_about" type="text" name="descriptions" required></textarea>
                                            </div>

                                            <div class="form-group">
                                                <div class="upload__box">
                                                    <div class="upload__btn-box">
                                                        <label class="upload__btn">
                                                            <p>Upload images</p>
                                                            <input type="file" id="images" data-max_length="20" class="upload__inputfile" name="photos[]" multiple required>
                                                            
                                                        </label>
                                                    </div>
                                                    <!-- <span class="text-danger">
                                                            @error('images[]')
                                                            {{$message}}
                                                            @enderror
                                                    </span> -->
                                                    <div class="upload__img-wrap"></div>
                                                </div>
                                            </div>
                            
                                            <div class="modal-footer">
                                                <input type="button" class="btn btn-secondary" data-dismiss="modal" value="close">
                                                <input class="submit" type="submit" name="Submit" value="Submit">
                                            </div>

                                        </form>
                                    </div>
                                    <!-- <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div> -->
                                    </div>
                                </div>
                            </div>


                        <section class="section">
                            <div class="card">
                                <div class="card-header">
                                    Car
                                </div>
                                <div class="card-body">
                                    <table class="table" id="table1">
                                        <thead>
                                            <tr class="bg-color" style="background:#9e9e9e57">
                                                <th class="tbl no">NO</th>
                                                <th class="tbl name">CAR NAME</th>
                                                <th class="tbl brand">BRAND</th>
                                                <th class="tbl">TYPE</th>
                                                <th class="tbl brand">MODEL</th>
                                                <th class="tbl name">AVERAGE</th>
                                                <th class="tbl">GPS</th>
                                                <th class="tbl">AMOUNT</th>
                                               
                                                <!-- <th class="tbl names">Image</th> -->
                                                <th class="tbl name text-center">MODIFY</th>
                                            </tr>    
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $key => $item)
                                                <tr>
                                                    <td class="tbl">{{ ++$key }}</td>
                                                    <!-- <th scope="row">{{ $item->id }}</th> -->
                                                    <td class="tbl">{{ $item->name }}</td>
                                                    <td class="tbl">{{ $item->brands->name }}</td>
                                                    <td class="tbl">{{ $item->type }}</td>
                                                    <td class="tbl">{{ $item->model }}</td>
                                                    <td class="tbl">{{ $item->average }}</td>
                                                    <td class="tbl">{{ $item->gps }}</td>
                                                    <td class="tbl">{{ $item->amount }}</td>
                                                 
                                                    <!-- <td class="tbl">
                                                        <img src="{{ asset('/uploads/images/'.$item->image) }}" class="img-fluid" style="width:70px; height:70px" >
                                                    </td> -->
                                                 
                                                    <td class="text-center-1">
                                                        <a href="" data-toggle="modal" data-target="#add">
                                                            <span class="badge bg-info"><i class="fa fa-user-plus" aria-hidden="true"></i></span>
                                                        </a>
                                                        <a href="{{ url('mmladmin/car/edit/'.$item->id) }}">
                                                            <span class="badge bg-success"><i class="fa fa-edit"></i></span>
                                                        </a>   
                                                        <a href="{{ url('mmladmin/car/delete/'.$item->id) }}" onclick="return confirm('Are you sure to want to delete it?')">
                                                                <span class="badge bg-danger">
                                                                    <i class="fa fa-trash"></i>
                                                                </span>
                                                        </a>          
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>
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
    jQuery(document).ready(function () {
  ImgUpload();
});

function ImgUpload() {
  var imgWrap = "";
  var imgArray = [];

  $('.upload__inputfile').each(function () {
    $(this).on('change', function (e) {
      imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
      var maxLength = $(this).attr('data-max_length');

      var files = e.target.files;
      var filesArr = Array.prototype.slice.call(files);
      var iterator = 0;
      filesArr.forEach(function (f, index) {

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
            reader.onload = function (e) {
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

  $('body').on('click', ".upload__img-close", function (e) {
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