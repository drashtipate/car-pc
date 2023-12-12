<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>

<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <div class="overlay"></div>
    <aside class="left-sidebar" data-sidebarbg="skin6" id="sidebar-wrapper">
        <div class="navbar-header" data-logobg="skin6">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="">
                <!-- Logo icon -->
                <b class="logo-icon">

                    <p class="text-uppercase text-primary mb-1 p-logo">Royal Cars</p>
                    <!-- <img src="{{asset('admin/plugins/images/users/royal.jfif')}}" class="img-logo" alt="logo-img" style="margin-top: -20px; width: 115%;"> -->
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
            </a>

            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        </div>
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <!-- User Profile-->
                    <li class="sidebar-user-panel">
                        <div class="sidebar-user">
                            <div class="sidebar-user-picture">
                                <img src="{{asset('admin/plugins/images/users/hritik.jpg')}}" alt="user-img">
                            </div>
                            <div class="sidebar-user-details">
                                <div class="user-name">Admin</div>
                                <div class="user-role">Administrator</div>
                            </div>
                        </div>
                    </li>
                    <li class="sidebar-item pt-2 {{ Request::is('mmladmin/home') ? 'active':'' }} ">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('mmladmin/home')}}" aria-expanded="false">
                            <i class="far fa-clock" aria-hidden="true"></i>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item pb-2 {{ Request::is('mmladmin/location*') ? 'active':'' }} ">
                        <!-- <a class="sidebar-link waves-effect waves-dark sidebar-link" href=""
                                aria-expanded="false"> -->
                        <div class="sidebar_header">
                            <div class="sidebar_content">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link-link" href="#location" data-bs-toggle="collapse" aria-expanded="{{ Request::is('mmladmin/location*') ? 'true':'false' }}">
                                    <i class="fas fa-list"></i>
                                    <span class="hide-menu">
                                        <!-- <a href=""> -->
                                        Location
                                        <!-- </a> -->
                                    </span>
                                    <div class="sidebar_dropdownicon">
                                        <i class="fa fa-angle-down">
                                        </i>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar_dropdown">
                                <div class="sidebar_dropdown_body">
                                    <div class="sidebar_dropdown_item">
                                        <a class="sidebar_dropdown_name" href="{{url('mmladmin/location')}}">
                                            <!-- <i class="fa fa-globe"> -->
                                            Country
                                            </i>
                                        </a>
                                    </div>
                                    <div class="sidebar_dropdown_item">
                                        <a class="sidebar_dropdown_name" href="{{url('mmladmin/state ')}}">
                                            <!-- <i class="fas fa-anchor"> -->
                                            State
                                            </i>
                                        </a>
                                    </div>
                                    <div class="sidebar_dropdown_item">
                                        <a class="sidebar_dropdown_name" href="{{url('mmladmin/city')}}">
                                            <!-- <i class="fas fa-city"> -->
                                            City
                                            </i>
                                        </a>
                                    </div>


                                    <div class="sidebar_dropdown_item">
                                        <a class="sidebar_dropdown_name" href="{{url('mmladmin/pincode')}}">
                                            <!-- <i class="fa fa-map-pin"> -->
                                            Pincode
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- </a> -->
                    </li>

                    <!-- <li class="sidebar-item {{ Request::is('mmladmin/brand') ? 'active':'' }} ">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url ('mmladmin/brand')}}"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">Brand</span>
                            </a>
                        </li> -->
                    <li class="sidebar-item pb-2 {{ Request::is('mmladmin/brands*') ? 'active':'' }} ">
                        <!-- <a class="sidebar-link waves-effect waves-dark sidebar-link" href=""
                                aria-expanded="false"> -->
                        <div class="sidebar_header">
                            <div class="sidebar_content">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link-link" href="#brands" data-bs-toggle="collapse" aria-expanded="{{ Request::is('mmladmin/brands*') ? 'true':'false' }}">
                                    <i class="fa fa-columns" aria-hidden="true"></i>
                                    <span class="hide-menu">
                                        <!-- <a href=""> -->
                                        Brands
                                        <!-- </a> -->
                                    </span>
                                    <div class="sidebar_dropdownicons" style="padding-left:88px;">
                                        <i class="fa fa-angle-down">
                                        </i>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar_dropdown">
                                <div class="sidebar_dropdown_body">
                                    <div class="sidebar_dropdown_item">
                                        <a class="sidebar_dropdown_name" href="{{url ('mmladmin/brand')}}">
                                            <!-- <i class="fa fa-globe"> -->
                                            Create Brand
                                            </i>
                                        </a>
                                    </div>
                                    <div class="sidebar_dropdown_item">
                                        <a class="sidebar_dropdown_name" href="{{url ('mmladmin/brandview')}}">
                                            <!-- <i class="fas fa-anchor"> -->
                                            Manage Brand
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- </a> -->
                    </li>

                    <!-- <li class="sidebar-item {{ Request::is('mmladmin/car') ? 'active':'' }} ">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url ('mmladmin/car')}}"
                                aria-expanded="false">
                                <i class="fas fa-car"></i>
                                <span class="hide-menu">Car</span>
                            </a>
                        </li> -->

                    <li class="sidebar-item pb-2 {{ Request::is('mmladmin/car*') ? 'active':'' }} ">
                        <!-- <a class="sidebar-link waves-effect waves-dark sidebar-link" href=""
                                aria-expanded="false"> -->
                        <div class="sidebar_header">
                            <div class="sidebar_content">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link-link" href="#car" data-bs-toggle="collapse" aria-expanded="{{ Request::is('mmladmin/car*') ? 'true':'false' }}">
                                    <i class="fas fa-car" aria-hidden="true"></i>
                                    <span class="hide-menu">
                                        <!-- <a href=""> -->
                                        Car
                                        <!-- </a> -->
                                    </span>
                                    <div class="sidebar_dropdownicons" style="padding-left:114px;">
                                        <i class="fa fa-angle-down">
                                        </i>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar_dropdown">
                                <div class="sidebar_dropdown_body">
                                    <div class="sidebar_dropdown_item">
                                        <a class="sidebar_dropdown_name" href="{{url ('mmladmin/car')}}">
                                            <!-- <i class="fa fa-globe"> -->
                                            Create Car
                                            </i>
                                        </a>
                                    </div>
                                    <div class="sidebar_dropdown_item">
                                        <a class="sidebar_dropdown_name" href="{{url ('mmladmin/carview')}}">
                                            <!-- <i class="fas fa-anchor"> -->
                                            Manage Car
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- </a> -->
                    </li>

                    <!-- <li class="sidebar-item pb-2 {{ Request::is('mmladmin/viewrecord*') ? 'active':'' }} ">
                                <div class="sidebar_header">
                                        <div class="sidebar_content">
                                            <a class="sidebar-link waves-effect waves-dark sidebar-link-link" href="#viewrecord" 
                                                data-bs-toggle="collapse"  aria-expanded="{{ Request::is('mmladmin/viewrecord*') ? 'true':'false' }}">
                                                <i class="fa fa-th-large"></i>
                                                    <span class="hide-menu">
                                                        View Record
                                                    </span>
                                                    <div class="sidebar_dropdownicons">
                                                        <i class="fa fa-angle-down">    
                                                        </i>
                                                    </div>
                                            </a>
                                        </div>
                                        <div class="sidebar_dropdown">
                                            <div class="sidebar_dropdown_body">
                                                <div class="sidebar_dropdown_item">
                                                    <a class="sidebar_dropdown_name" href="{{url ('mmladmin/pincode/view/location')}}">
                                                        View Location
                                                        </i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                        </li> -->
                    

                    <li class="sidebar-item pb-2 {{ Request::is('mmladmin/labels*') ? 'active':'' }} ">
                        <!-- <a class="sidebar-link waves-effect waves-dark sidebar-link" href=""
                                aria-expanded="false"> -->
                        <div class="sidebar_header">
                            <div class="sidebar_content">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link-link" href="#labels" data-bs-toggle="collapse" aria-expanded="{{ Request::is('mmladmin/labels*') ? 'true':'false' }}">
                                    <i class="fa fa-tag" aria-hidden="true"></i>
                                    <span class="hide-menu">
                                        Features
                                    </span>
                                    <div class="sidebar_dropdownicons" style="padding-left:76px;">
                                        <i class="fa fa-angle-down">
                                        </i>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar_dropdown">
                                <div class="sidebar_dropdown_body">
                                    <div class="sidebar_dropdown_item">
                                        <a class="sidebar_dropdown_name" href="{{url ('mmladmin/label')}}">
                                            <!-- <i class="fa fa-globe"> -->
                                            Create Slider
                                            </i>
                                        </a>
                                    </div>
                                    <div class="sidebar_dropdown_item">
                                        <a class="sidebar_dropdown_name" href="{{url ('mmladmin/label/view')}}">
                                            <!-- <i class="fas fa-anchor"> -->
                                            Manage Slider
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- </a> -->
                    </li>

                    <li class="sidebar-item pb-2 {{ Request::is('mmladmin/services*') ? 'active':'' }} ">
                        <!-- <a class="sidebar-link waves-effect waves-dark sidebar-link" href=""
                                aria-expanded="false"> -->
                        <div class="sidebar_header">
                            <div class="sidebar_content">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link-link" href="#services" data-bs-toggle="collapse" aria-expanded="{{ Request::is('mmladmin/services*') ? 'true':'false' }}">
                                    <i class="fa fa-clipboard" aria-hidden="true"></i>
                                    <span class="hide-menu">
                                        Service
                                    </span>
                                    <div class="sidebar_dropdownicons" style="padding-left:90px;">
                                        <i class="fa fa-angle-down">
                                        </i>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar_dropdown">
                                <div class="sidebar_dropdown_body">
                                    <div class="sidebar_dropdown_item">
                                        <a class="sidebar_dropdown_name" href="{{url ('mmladmin/user-service')}}">
                                            <!-- <i class="fa fa-globe"> -->
                                            Create Service
                                            </i>
                                        </a>
                                    </div>
                                    <div class="sidebar_dropdown_item">
                                        <a class="sidebar_dropdown_name" href="{{url ('mmladmin/service/view')}}">
                                            <!-- <i class="fas fa-anchor"> -->
                                            Manage Service
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- </a> -->
                    </li>

                    <li class="sidebar-item {{ Request::is('mmladmin/Offers') ? 'active':'' }} ">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url ('mmladmin/offer')}}" aria-expanded="false">
                            <i class="fa fa-archive" aria-hidden="true"></i>
                            <span class="hide-menu">Offers</span>
                        </a>
                    </li>

                    <!-- <li class="sidebar-item {{ Request::is('mmladmin/teams') ? 'active':'' }} ">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url ('mmladmin/user-team')}}" aria-expanded="false">
                            <i class="fa fa-users"></i>
                            <span class="hide-menu">Team</span>
                        </a>
                    </li> -->
                    <li class="sidebar-item pb-2 {{ Request::is('mmladmin/teams*') ? 'active':'' }} ">
                            <!-- <a class="sidebar-link waves-effect waves-dark sidebar-link" href=""
                                aria-expanded="false"> -->
                                <div class="sidebar_header">
                                        <div class="sidebar_content">
                                            <a class="sidebar-link waves-effect waves-dark sidebar-link-link" href="#teams" 
                                                data-bs-toggle="collapse"  aria-expanded="{{ Request::is('mmladmin/teams*') ? 'true':'false' }}">
                                                <i class="fa fa-users" aria-hidden="true"></i>
                                                    <span class="hide-menu">
                                                        Team
                                                    </span>
                                                    <div class="sidebar_dropdownicons" style="padding-left:96px;">
                                                        <i class="fa fa-angle-down">    
                                                        </i>
                                                    </div>
                                            </a>
                                        </div>
                                        <div class="sidebar_dropdown">
                                            <div class="sidebar_dropdown_body">
                                                <div class="sidebar_dropdown_item">
                                                    <a class="sidebar_dropdown_name" href="{{url ('mmladmin/user-team')}}">
                                                        <!-- <i class="fa fa-globe"> -->
                                                        Add Teams
                                                        </i>
                                                    </a>
                                                </div>
                                                <div class="sidebar_dropdown_item">
                                                    <a class="sidebar_dropdown_name" href="{{route ('mmladmin/team/view')}}">
                                                        <!-- <i class="fas fa-anchor"> -->
                                                        Manage Teams
                                                        </i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            <!-- </a> -->
                        </li>




                    <li class="sidebar-item pb-2 {{ Request::is('mmladmin/bookings*') ? 'active':'' }} ">
                        <!-- <a class="sidebar-link waves-effect waves-dark sidebar-link" href=""
                                aria-expanded="false"> -->
                        <div class="sidebar_header">
                            <div class="sidebar_content">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link-link" href="#bookings" data-bs-toggle="collapse" aria-expanded="{{ Request::is('mmladmin/bookings*') ? 'true':'false' }}">
                                    <i class="fa fa-sitemap" aria-hidden="true"></i>
                                    <span class="hide-menu">
                                        Bookings
                                    </span>
                                    <div class="sidebar_dropdownicons" style="padding-left:68px;">
                                        <i class="fa fa-angle-down">
                                        </i>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar_dropdown">
                                <div class="sidebar_dropdown_body">
                                    <div class="sidebar_dropdown_item">
                                        <a class="sidebar_dropdown_name" href="{{url ('mmladmin/booking')}}">
                                            Confirmed
                                            </i>
                                        </a>
                                    </div>
                                    <div class="sidebar_dropdown_item">
                                        <a class="sidebar_dropdown_name" href="{{url ('mmladmin/pending')}}">
                                            Pending
                                            </i>
                                        </a>
                                    </div>
                                    <div class="sidebar_dropdown_item">
                                        <a class="sidebar_dropdown_name" href="{{url ('mmladmin/canceled')}}">
                                            Canceled
                                            </i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- </a> -->
                    </li>

                    <li class="sidebar-item pb-2 {{ Request::is('mmladmin/settings*') ? 'active':'' }} ">
                        <!-- <a class="sidebar-link waves-effect waves-dark sidebar-link" href=""
                                aria-expanded="false"> -->
                        <div class="sidebar_header">
                            <div class="sidebar_content">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link-link" href="#settings" data-bs-toggle="collapse" aria-expanded="{{ Request::is('mmladmin/settings*') ? 'true':'false' }}">
                                    <i class="fa fa-cog" aria-hidden="true"></i>
                                    <span class="hide-menu">
                                        Settings
                                    </span>
                                    <div class="sidebar_dropdownicons" style="padding-left:77px;">
                                        <i class="fa fa-angle-down">
                                        </i>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar_dropdown">
                                <div class="sidebar_dropdown_body">
                                    <div class="sidebar_dropdown_item">
                                        <a class="sidebar_dropdown_name" href="{{url ('mmladmin/contactusquery')}}">
                                            Manage Contactus
                                            </i>
                                        </a>
                                    </div>
                                    <div class="sidebar_dropdown_item">
                                        <a class="sidebar_dropdown_name" href="{{url ('mmladmin/contact-info')}}">
                                            Update Contact Info
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- </a> -->
                    </li>


                    <li class="sidebar-item {{ Request::is('mmladmin/users') ? 'active':'' }} ">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url ('mmladmin/viewuser')}}" aria-expanded="false">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span class="hide-menu">Reg Users</span>
                        </a>
                    </li>

                    
                    <!-- <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url ('mmladmin/error')}}"
                                aria-expanded="false">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                <span class="hide-menu">Error 404</span>
                            </a>
                        </li> -->
                    <!-- <li class="text-center p-20 upgrade-btn mt-4">
                            <a href=""
                                class="btn btn-danger d-grid text-white" target="_blank">
                                Upgrade to Pro</a>
                        </li> -->
                </ul>

            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
        <!-- <div class="footer-sidebar"> -->
        <!-- <li class="text-center p-20 upgrade-btn mt-4"> -->
        <!-- <a href="" class="btn btn-danger d-grid text-white" target="_blank">
                        Upgrade to Pro</a> -->
        <!-- </li> -->
        <!-- </div> -->
    </aside>
</div>