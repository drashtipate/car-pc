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
                        <h6 class="page-title" style="color:#8486A0; font-size:0.875rem">User Edit Team</h4>
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
                            <h3 class="box-title">Team</h3>
                            <form class="form-horizontal" action="{{ url('mmladmin/team/view/update/'.$team->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="add_city" class="col-sm-2 control-label">Team Name</label>
                                        <input id="add_city" type="text" name="name"  value="{{ $team->name }}">
                                </div>

                                <div class="form-group">
                                    <label for="add_city" class="col-sm-2 control-label">Designation</label>
                                        <input id="add_city" type="text" name="designation"  value="{{ $team->designation }}">
                                </div>

                                <div class="form-group">
                                    <label for="add_state" class="col-sm-2 control-label">Choose File</label>
                                    <input type="file" name="teamimage" id="add_country" class="border p-2  @error('image') is-invalid @enderror">
                                    <img src="{{ asset('images/userteamimg/'.$team->image) }}" width="100px;" height="100px;" alt="image">
                                </div>
                                

                                <!-- <div class="form-group">
                                    <label for="add_city" class="col-sm-2 control-label">Customer Service</label>
                                        <input id="add_city" type="text" name="pincode"  value="" required>
                                </div> -->

                                

                                <div class="form-group">
                                    <input class="submit" type="submit" name="Submit" value="Update">
                                    <a href="{{ url('mmladmin/team/view') }}" class="submit-back me-1 mb-1">Back</a>
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


@endsection      
      
      
      
      
      
      