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
                        <h6 class="page-title" style="color:#8486A0; font-size:0.875rem">Manage Brand</h4>
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
                                        <h5 class="modal-title" id="exampleModalLabel">Brand</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" action="{{ url('mmladmin/brands')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="add_state" class="col-sm-3 control-label">Brand Name</label>
                                                <input id="add_country" type="text" name="brand" class="form-control @error('name') is-invalid @enderror" required>
                                                
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
                                    Brand
                                </div>
                                <div class="card-body">
                                    <table class="table" id="table1">
                                        <thead>
                                            <tr class="bg-color" style="background:#9e9e9e57">
                                                <th>ID</th>
                                                <th>NAME</th>
                                                <th>IMAGE</th>
                                                <!-- <th>CREATED_AT</th>
                                                <th>UPDATED_AT</th> -->
                                                <th class="text-center">MODIFY</th>
                                            </tr>    
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $key => $item)
                                                <tr>
                                                    <!-- <td class="id">{{ ++$key }}</td> -->
                                                    <td class="name">{{ $item->id }}</td>
                                                    <td class="name">{{ $item->name }}</td>

                                                    <td class="name"> <img src="{{ asset('images/brand/' . $item->image) }}" width="70px;" height="70px;" alt="image"> </td>
                                                    <!-- <td class="name">{{ $item->created_at }}</td>
                                                    <td class="name">{{ $item->updated_at }}</td> -->
                                                    <td class="text-center">
                                                        <a href="" data-toggle="modal" data-target="#add">
                                                            <span class="badge bg-info"><i class="fa fa-user-plus" aria-hidden="true"></i></span>
                                                        </a>
                                                        <a href="{{ url('mmladmin/editbrand/'.$item->id) }}">
                                                            <span class="badge bg-success"><i class="fa fa-edit"></i></span>
                                                        </a> 
                                                         <!-- Button trigger modal -->
                                                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                        edit
                                                        </button>    -->
                                                        <a href="{{ url('mmladmin/brand/delete/'.$item->id) }}" onclick="return confirm('Are you sure to want to delete it?')"><span class="badge bg-danger"><i class="fa fa-trash"></i></span></a>
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