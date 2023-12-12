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
                        <h6 class="page-title" style="color:#8486A0; font-size:0.875rem">Manage Slider</h4>
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
                            
                            <!-- Modal add service -->
                            <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Slider</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" action="{{ url('mmladmin/head') }}" method="post" enctype="multipart/form-data">
                                            @csrf
         
                                            <div class="form-group">
                                                <label for="add_city" class="col-sm-2 control-label">Label 1</label>
                                                    <input id="add_city" type="text" name="lbl1"  value=""  required>
                                            </div>  

                                            <div class="form-group">
                                                <label for="add_city" class="col-sm-2 control-label">Label 2</label>
                                                    <input id="add_city" type="text" name="lbl2"  value="" required>
                                            </div>
                                
                                            <div class="form-group">
                                                <label for="add_state" class="col-sm-2 control-label">Choose File</label>
                                                <input type="file" name="image" id="add_country" class="border p-2  @error('image') is-invalid @enderror" required>
                                            </div>
                            

                                            <div class="modal-footer">
                                                <input type="button" class="btn btn-secondary" data-dismiss="modal" value="close">
                                                <input class="submit" type="submit" name="Submit" value="Submit">
                                            </div>

                                        </form>
                                    </div>
                                    
                                    </div>
                                </div>
                            </div>

                        <section class="section">
                            <div class="card">
                                <div class="card-header">
                                    User Slider
                                </div>
                                <div class="card-body">
                                    <table class="display table table-striped table-bordered table-hover dataTable " id="table1">
                                        <thead>
                                            <tr class="bg-color">
                                                <th class="tbl no">ID</th>
                                                <th class="tbl name">NAME</th>  
                                                <th class="tbl">DESCRIPTION</th>
                                                <th class="tbl brand">IMAGE</th>
                                                <th class="tbl name text-center">MODIFY</th>
                                            </tr>    
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $key => $item)
                                                <tr>
                                                    <td class="tbl">{{ ++$key }}</td>
                                                    <!-- <td class="tbl">{{ $item->id }}</td> -->
                                                    <td class="tbl">{{ $item->label1 }}</td>
                                                    <td class="tbl">{{ $item->label2 }}</td>
                                                    <td class="name"> <img src="{{ asset('images/label/'.$item->image) }}" width="70px;" height="70px;" alt="image"> </td>
                                                    
                                                 
                                                    <td style="text-align:center;">
                                                        <a href="" data-toggle="modal" data-target="#add">
                                                            <span class="badge bg-info"><i class="fa fa-user-plus" aria-hidden="true"></i></span>
                                                        </a>
                                                        
                                                        <a href="{{ url('mmladmin/label/edit/'.$item->id) }}">
                                                            <span class="badge bg-success"><i class="fa fa-edit"></i></span>
                                                        </a>   

                                                        <a href="{{ url('mmladmin/label/delete/'.$item->id) }}" onclick="return confirm('Are you sure to want to delete it?')">
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

@endsection