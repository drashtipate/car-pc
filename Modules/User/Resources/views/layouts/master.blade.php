<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ROYAL CARS </title>


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->

    <link href="{{asset('user/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('user/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('user/css/bootstrap.min.css')}}" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Template Stylesheet -->
    <link href="{{asset('user/css/style.css')}}" rel="stylesheet">
    {{-- Laravel Vite - CSS File --}}
    {{-- {{ module_vite('build-user', 'Resources/assets/sass/app.scss') }} --}}

</head>

<body>
    @include('user::layouts.topbar')

    @yield('content')
    @yield('scripts')
    @include('user::layouts.footer')
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

    <script src="{{asset('user/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('user/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('user/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('user/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('user/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('user/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('user/js/main.js')}}"></script>
    <script src="{{asset('user/lib/checkout/checkout.js')}}"></script>

    <!-- skrollr -->
    <script src="{{asset('user/js/skrollr.js')}}"></script>
    <script type="text/javascript">
	    var s = skrollr.init();
	</script>


    <!-- <div class="cursor"></div>
    <script>
        const cursor = document.querySelector(".cursor");
        var timeout;

        //follow cursor on mousemove
        document.addEventListener("mousemove", (e) => {
            let x = e.pageX;
            let y = e.pageY;

            cursor.style.left = e.pageX + "px";
            cursor.style.top = e.pageY + "px";
            cursor.style.display = "block";

        // cursor effect on mouse stopped
        function mouseStopped() {
            cursor.style.display = "none";
        }
        clearTimeout(timeout);
        timeout = setTimeout(mouseStopped, 1000);
    });

        //cursor effect on mouseout
        document.addEventListener("mouseout", (e) => {
            cursor.style.display = "none";
        });
    </script> -->
</body>

</html>