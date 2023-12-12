<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex,nofollow">
  <title>{{ config('app.name') }}</title>
  <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css?>">

   <!-- Font Awesome -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/plugins/images/favicon.png')}}">
  <!-- Custom CSS -->
  <link href="{{ asset('admin/plugins/bower_components/chartist/dist/chartist.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('admin/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css')}}">
  <!-- Custom CSS -->
  <link href="{{ asset('admin/css/login.css') }}" rel="stylesheet">

</head>

<body class="bg-img">
  

  <div class="wrapper">

    <!-- <div class="text-center mt-4 name">
      Admin
    </div> -->
    <h2 class="text-center mt-4 name">LOGIN TO <span class="red"><strong>Rcars</strong></span></h2>
    <br>
    <!-- <form action="{{ url('mmladmin/checkAdmin')}}" method="post">
      @csrf
      <div class="form-field d-flex align-items-center">
        <span class="fas fa-user"></span>
        <input type="text" name="email" id="email" placeholder="Email">
        @error('email')
        <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
      </div>

      <div class="form-field d-flex align-items-center">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>

        <input type="password" name="password" id="password" placeholder="Password">
        @error('password')
        <span class="error invalid-feedback">{{ $message }}</span>
        @enderror 
      </div>


      <button class="btn mt-3" name="login">Sing in</button>
    </form> -->
    <form action="{{ url('mmladmin/checkAdmin')}}" method="post">
      @csrf
      <div class="form-field d-flex align-items-center">
        <span class="form-control-icon">
          <i class="fas fa-user"></i>
        </span>
        <input type="text" name="email" id="email" placeholder="Email">
          @error('email')
            <span class="errors invalid-feedback" style="color:#ce493f;">{{ $message }}</span>
          @enderror
        <!-- <span class="text-danger">
          @error('email')
          {{$message}}
          @enderror
        </span> -->
      </div>

      <div class="form-field d-flex align-items-center">
        <span class="form-control-icon">
          <i class="fas fa-lock"></i>
        </span>
        <input type="password" name="password" placeholder="Password" id="myInput">
        <!-- <span class="eye" onclick="myFunction()">
          <i id="hide1" class="fa fa-eye"></i>
          <i id="hide2" class="fa fa-eye-slash"></i>
        </span> -->
          @error('password')
            <span class="errors invalid-feedback text-danger" style="color:#ce493f;">{{ $message }}</span>
          @enderror 
      </div>

      <button class="btn" name="login">LOGIN</button>
      <div class="btm_user">
        <a href="{{url('users/')}}">Back to Home</a>
      </div>
        
    </form>

  </div>

  <script src="{{ asset('admin/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('admin/js/app-style-switcher.js')}}"></script>
  <script src="{{ asset('admin/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
  <!--Wave Effects -->
  <script src="{{ asset('admin/js/waves.js')}}"></script>
  <!--Menu sidebar -->
  <script src="{{ asset('admin/js/sidebarmenu.js')}}"></script>
  <!--Custom JavaScript -->
  <script src="{{ asset('admin/js/custom.js')}}"></script>
  <!--This page JavaScript -->
  <!--chartis chart-->
  <script src="{{ asset('admin/plugins/bower_components/chartist/dist/chartist.min.js')}}"></script>
  <script src="{{ asset('admin/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
  <script src="{{ asset('admin/js/pages/dashboards/dashboard1.js')}}"></script>
</body>

</html>