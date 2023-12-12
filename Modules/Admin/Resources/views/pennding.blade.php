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
            <h6 class="page-title" style="color:#8486A0; font-size:0.875rem">Booking Car</h4>
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

      <section class="section">
        <div class="card">
          <div class="card-header">
            Booking
          </div>
          <div class="card-body">
            <table class="table" id="table1">
              <thead>
                <tr class="bg-color" style="background:#9e9e9e57">
                  <th class="tbl no">NO</th>
                  <th class="tbl name">Name</th>
                  <th class="tbl brand">Email</th>
                  <th class="tbl">Number</th>
                  <th class="tbl brand">pickup</th>
                  <th class="tbl name">Drop</th>
                  <th class="tbl">Amount</th>
                  <th class="tbl">pickup time</th>
                  <th class="tbl">drop time</th>
                  <!-- <th class="tbl names">Image</th> -->
                  <th class="tbl name text-center">Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach($query as $querys)
                <tr>

                  <td class="tbl">{{$loop->iteration}}</td>
                  <td class="tbl">{{$querys->firstname}} {{$querys->lname}}</td>
                  <td class="tbl">{{$querys->email}}</td>
                  <td class="tbl">{{$querys->number}}</td>
                  <td class="tbl">{{$querys->pickup}}</td>
                  <td class="tbl">{{$querys->drop}}</td>
                  <td class="tbl">{{$querys->amount}}</td>
                  <td class="tbl">{{$querys->ptime}}</td>
                  <td class="tbl">{{$querys->dtime}}</td>

                  <td class="tbl">


                  <button type="button" value="{{$querys->id}}" class="btn-block2" data-toggle="modal" data-target="#exampleModal">
                      pending
                    </button>

                    @endforeach
                    <!-- Modal -->
                    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>

                          <div class="modal-body">
                            <form action="{{url('mmladmin/updatestatus')}}" method="post">
                              @csrf
                              @method('PUT')
                              <input type="hidden" id="stud_id" name="stud_id">

                              <div class="modal-body">
                                <div class="col-md-12 mb-12">
                                  <select id="status" name="status" class="form-select">
                                    <option value="1">Completed</option>
                                    <option value="2">Cancel</option>
                                    <option value="0">Pending</option>
                                  </select>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <input type="button" class="btn btn-secondary" data-dismiss="modal" value="CLOSE">
                                <button type="submit" class="btn btn-orange" data-dismiss="modal">SAVE</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>

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
  $(document).ready(function() {
    $(document).on('click', '.btn-block2', function() {
      var stud_id = $(this).val();
      // alert(stud_id);
      
      $('#editmodal').modal('show');
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        type: 'post',
        url: "/mmladmin/changes/" + stud_id,
        success: function(response) {
          // console.log();
          $('#status').val(response.booking.payment_status);
          $('#stud_id').val(stud_id);

        }
      })
    
    });
  });
</script>


@endsection