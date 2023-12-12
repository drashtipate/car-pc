@extends('admin::layouts.master')

@section('content')


<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
   
 <div class="overlay"></div>
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
                        <h6 class="page-title" style="color:#8486A0; font-size:0.875rem">Change Password</h4>
                    </div>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <div class="d-md-flex">
                        <ol class="breadcrumb ms-auto">
                            <li><a href="#" class="fw-normal">Dashboard</a></li>
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
                    <!-- <div class="col-sm-12"> -->
                    <div class="white-box">
                            <!-- <h3 class="box-title">Profile</h3> -->
                        <div class="row">
                            <div class="col-md-3 border-right">
                                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                    <img class="rounded-circle mt-5" width="150px" src="{{asset('admin/plugins/images/users/hritik.jpg')}}">
                                    <span class="font-weight-bold">Admin</span>
                                    <span class="text-black-50">admin@gmail.com</span>
                                </div>
                            </div>
                            <div class="col-md-9 border-right">  
                           

                                <hr>
                                {{-- Change Password --}}
                                <div class="p-3 py-5">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4 class="text-right">
                                            Change Password
                                        </h4>
                                    </div>

                                    <form action="{{ url('mmladmin/update-admin-password') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mt-2">
                                            @if (session('status'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ session('status') }}
                                                </div>
                                            @elseif (session('error'))
                                                <div class="alert alert-denger" role="alert">
                                                    {{ session('error') }}
                                                </div>
                                            @endif
                        
                                            <div class="col-md-4">
                                                <label class="profile-labels">Current Password</label>
                                                <input type="password" name="oldpassword" id="oldpassword" class="form-control @error('oldpassword') is-invalid @enderror" placeholder="Current Password" >
                                                @error('oldpassword')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <span id="check_password"></span>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="profile-labels">New Password</label>
                                                <input type="password" name="new_password" id="new_password" class="form-control @error('new_password') is-invalid @enderror"  placeholder="New Password">
                                                @error('new_password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label class="profile-labels">Confirm Password</label>
                                                <input type="password" name="password_confirmation" id="confirm_password" class="form-control @error('password_confirmation') is-invalid @enderror"  placeholder="Confirm Password">
                                                @error('password_confirmation')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mt-5 text-center">
                                            <button class="btn btn-success profile-button" type="submit">Change Password</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                <!-- </div> -->
              
        </div>
              
         
					
        <!-- End Container fluid  -->
        </div>
    </div>
</div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
   
@endsection
