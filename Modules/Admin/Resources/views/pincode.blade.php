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
                        <h6 class="page-title" style="color:#8486A0; font-size:0.875rem">Pincode</h4>
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
                            <h3 class="box-title">Add Pincode</h3>
                            <form class="form-horizontal" action="{{ url('mmladmin/pincodes')}}" method="get">
                                @csrf
                                <div class="form-group">
                                    <label for="country" class="col-sm-2 control-label">Country</label>
                                        <select id="country-dropdown" name="country">
                                            <option value="">-- Select Country --</option>
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                @endforeach
                                        </select>
                                        <span class="text-danger">
                                            @error('country')
                                            {{$message}}
                                            @enderror
                                        </span>
                                </div>

                                <div class="form-group">
                                    <label for="state" class="col-sm-2 control-label">State</label>
                                        <select id="state-dropdown" name="state">
                                            <option value="">-- Select State --</option>
                                        </select>
                                        <span class="text-danger">
                                            @error('state')
                                            {{$message}}
                                            @enderror
                                        </span>
                                </div>


                                <div class="form-group">
                                     <label for="state" class="col-sm-2 control-label">City</label>
                                        <select id="city-dropdown" name="city">
                                            <option value="">-- Select City --</option>
                                                
                                        </select>
                                        <span class="text-danger">
                                            @error('city')
                                            {{$message}}
                                            @enderror
                                         </span>
            
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label for="add_city" class="col-sm-2 control-label">Pincode</label>
                                                <input id="add_city" type="text" name="pincode">
                                                <span class="text-danger">
                                                    @error('pincode')
                                                    {{$message}}
                                                    @enderror
                                                </span>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="add_city" class="col-sm-2 control-label">Street</label>
                                                <input id="add_city" type="text" name="area">
                                                <span class="text-danger">
                                                    @error('area')
                                                    {{$message}}
                                                    @enderror
                                                </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input class="submit" type="submit" name="Submit" value="Submit">
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
  $(document).ready(function() {
    $('#country-dropdown').on('change', function() {
      var cid = $(this).val();
      $.ajax({
        url: '/mmladmin/getState',
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


    $('#state-dropdown').on('change', function() {
      var sid = $(this).val();

      $.ajax({
        url: '/mmladmin/getcity',
        type: 'post',
        data: 'sid=' + sid + '&_token={{csrf_token()}}',
        dataType: 'json',
        success: function(result) {
          console.log(result);

          $('#city-dropdown').find('option:not(:first)').remove();
          if (result['citys'].length > 0) {
            $.each(result['citys'], function(key, value) {
              $('#city-dropdown').append("<option value='" + value['id'] + "'>" + value['name'] + "</Option>")
            })
          }
        }
      });
    });
  });
</script>
@endsection