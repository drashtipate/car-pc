<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>

<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <div class="overlay"></div>
    
    <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">

            <!-- <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button> -->
            <!-- <div class="navbar-header" data-logobg="skin6">
                
                <a class="navbar-brand" href="">
                  
                    <b class="logo-icon">

                        <p class="text-uppercase text-primary mb-1 p-logo">Royal Cars</p>
                    </b>
                  
                </a>
                
                <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            </div> -->
            
            
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav ms-auto d-flex align-items-center">

                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <!-- <div class="togglemenu">
                        <a id="btn-collapse" href="#">
                            <i class='fas fa-bars'></i>
                        </a>
                        <a id="btn-toggle" href="#" class="sidebar-toggler break-point-lg">
                            <i class='fas fa-bars'></i>
                        </a>
                    </div> -->
                    <div class="page-topbar">
                        <!-- <li class=" in"> -->
                        <form action="" method="GET" role="search" class="form-control/">
                                <div class="input-group">
                                    <input type="search" name="search" value="" placeholder="Search..." class="form-control mt-0" style="border: none;">
                                        <!-- <a href="" class="active"> -->
                                        <button class="btn bg-white" type="submit">
                                             <i class="fa fa-search"></i>
                                        <!-- </a> --></button>
                                </div>
                            </form>
                        <!-- </li> -->
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->


                        <li>
                            <!-- <a class="profile-pic" href="{{ url('mmladmin/logout')}}">
                                <img src="{{asset('admin/plugins/images/users/R.jfif')}}" alt="user-img" width="36" class="img-circle">
                                <span class="text-white font-medium">Admin</span>
                            </a> -->
                            <div class="header_dropdown">
                                <div class="admin_content">
                                    <div class="admin_data">
                                        <div class="image">
                                            <img src="{{asset('admin/plugins/images/users/hritik.jpg')}}" alt="user-img" width="36" class="img-circle">
                                        </div>
                                        <div class="admin_name">
                                            <a href="">
                                                Admin
                                            </a>
                                        </div>
                                        <div class="admin_dropdownicon">
                                            <i class="fas fa-sort-down"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="account_dropdown" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(22px, 55px); margin-top: 5px; width: 185px;">
                                <div class="account_dropdown_body">
                                        <div class="account_dropdown_item">
                                            <a href="{{ url('mmladmin/change-password') }}">
                                                <i class="fa fa-key" aria-hidden="true">
                                                    <span class="account_dropdown_name">Change Password</span>
                                                </i>
                                            </a>
                                        </div>
                                        <div class="account_dropdown_footer">
                                            <a href="{{ url('mmladmin/logout')}}">
                                                <i class="fas fa-sign-out-alt">
                                                    <span class="account_dropdown_name">Logout</span>
                                                </i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </div>


                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                </ul>
            </div>
        </nav>
    </header>
</div>

