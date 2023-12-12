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
                            <h1 class="page-title">Dashboard</h1>
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

            <!-- Three charts -->

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-12">
                    <div class="white-box analytics-info">
                        <h3 class="box-title">TOTAL CAR</h3>
                        <ul class="list-inline two-part d-flex align-items-center mb-0">
                            <li>
                                <div id="sparklinedash"><i class="fa fa-car" aria-hidden="true" style="font-size: 30px;margin-left: 15px;"></i>
                                </div>
                            </li>
                            @foreach($car as $cars)
                            <li class="ms-auto"><span class="counter text-success">{{$cars->id}}</span></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="white-box analytics-info">
                        <h3 class="box-title">TOTAL BOOKINGS</h3>
                        <ul class="list-inline two-part d-flex align-items-center mb-0">
                            <li>
                                <div id="sparklinedash2"><i class="fa fa-sitemap" aria-hidden="true" style="font-size: 25px;margin-left: 15px;"></i>
                                </div>
                            </li>
                            @foreach($totals as $total)
                            <li class="ms-auto"><span class="counter text-purple">{{$total->id}}</span></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="white-box analytics-info">
                        <h3 class="box-title">USER VISITOR</h3>
                        <ul class="list-inline two-part d-flex align-items-center mb-0">
                            <li>
                                <div id="sparklinedash3"><i class="fa fa-users" aria-hidden="true" style="font-size: 25px;margin-left: 15px;"></i>
                                    <!-- <canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas> -->
                                </div>
                            </li>
                            @foreach($users as $user)
                            <li class="ms-auto"><span class="counter text-info">{{$user->id}}</span>
                                @endforeach
                            </li>
                        </ul>
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