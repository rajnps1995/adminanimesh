
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="universal admin is super flexible, powerful, clean & modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, universal admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon"/>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome.css')}}">

    <!-- ico-font -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/icofont.css')}}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themify.css')}}">

    <!-- Flag icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/flag-icon.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- prism css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">

    <!-- Owl css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">

      <!--JSGrid css-->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}" />

          <!-- DatePicker css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/date-picker.css')}}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">

    <!-- Responsive css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">

    <!-- latest jquery-->
<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}" ></script>

</head>
<body>

<!-- Loader starts -->
<div class="loader-wrapper">
    <div class="loader bg-white">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <h4>Have a great day at work today <span>&#x263A;</span></h4>
    </div>
</div>
<!-- Loader ends -->

<!--page-wrapper Start-->
<div class="page-wrapper">

    <!--Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-left">
            <div class="logo-wrapper">
                <a href="{{route('admin.dashboard')}}">
                    <img src="{{asset('assets/images/logo-light.png')}}" class="image-dark" alt=""/>
                    <img src="{{asset('assets/images/logo-light-dark-layout.png')}}" class="image-light" alt=""/>
                </a>
            </div>
        </div>
        <div class="main-header-right row">
            <div class="mobile-sidebar col-1 ps-0">
                <div class="text-start switch-sm">
                    <label class="switch">
                        <input type="checkbox" id="sidebar-toggle" checked>
                        <span class="switch-state"></span>
                    </label>
                </div>
            </div>
            <div class="nav-right col">
                <ul class="nav-menus">
         
                    <li class="onhover-dropdown">
                        <div class="d-flex align-items-center">
                            <img class="align-self-center pull-right flex-shrink-0 me-2" src="{{asset('assets/images/dashboard/user.png')}}" alt="header-user"/>
                            <div>
                                <h6 class="m-0 txt-dark f-16">
                                {{\Auth::guard('admin')->user()->name}}
                                    <i class="fa fa-angle-down pull-right ms-2"></i>
                                </h6>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20">                         
                            
                            <li>
                                <a href="{{ route('admin.change_password') }}">
                                    <i class="icon-check-box"></i>
                                    Change Password
                                </a>
                            </li>
                           
                            <li>
                                <a href='{{ route("admin.logout") }}'>
                                    <i class="icon-power-off"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
               
            </div>
        </div>
    </div>
    <!--Page Header Ends-->

    <!--Page Body Start-->
    <div class="page-body-wrapper">
        <!--Page Sidebar Start-->
        <div class="page-sidebar custom-scrollbar">
            <div class="sidebar-user text-center">
                <div>
                    <img class="img-50 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#">
                </div>
                <h6 class="mt-3 f-12">{{\Auth::guard('admin')->user()->name}}</h6>
            </div>
            <ul class="sidebar-menu">
                <li class="active">
                    <div class="sidebar-title">General</div>
                    <a href="{{route('admin.dashboard')}}" class="sidebar-header">
                        <i class="icon-desktop"></i><span>Dashboard</span>
                        <i class="fa fa-angle-right pull-right"></i>
                    </a>
                
                </li>
              
                
              
               
                <li>
                    <a href="javascript:void(0)" class="sidebar-header">
                        <i class="icon-notepad"></i> <span>Vehicle</span>
                        <i class="fa fa-angle-right pull-right"></i>
                    </a>
                    <ul class="sidebar-submenu">
                    <li><a href="{{route('admin.vehicletype_view')}}"><i class="fa fa-angle-right"></i>Add Vehicle</a></li>     
                    <li><a href="{{route('admin.manage_vehicles')}}"><i class="fa fa-angle-right"></i>Manage Vehicles</a></li>                 
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" class="sidebar-header">
                        <i class="icon-notepad"></i> <span>Job Timings</span>
                        <i class="fa fa-angle-right pull-right"></i>
                    </a>
                    <ul class="sidebar-submenu">
                    <li><a href="{{route('admin.jobtiming_view')}}"><i class="fa fa-angle-right"></i>Add Job Timings</a></li>     
                    <li><a href="{{route('admin.manage_jobtiming')}}"><i class="fa fa-angle-right"></i>Manage Job Timings</a></li>                 
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" class="sidebar-header">
                        <i class="icon-notepad"></i> <span>Driver</span>
                        <i class="fa fa-angle-right pull-right"></i>
                    </a>
                    <ul class="sidebar-submenu">
                    <li><a href="{{route('admin.driver_view')}}"><i class="fa fa-angle-right"></i>Add Driver</a></li>     
                    <li><a href="{{route('admin.manage_drivers')}}"><i class="fa fa-angle-right"></i>Manage Driver</a></li>                 
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0)" class="sidebar-header">
                        <i class="icon-notepad"></i> <span>Area</span>
                        <i class="fa fa-angle-right pull-right"></i>
                    </a>
                    <ul class="sidebar-submenu">
                    <li><a href="{{route('admin.area_view')}}"><i class="fa fa-angle-right"></i>Add Area</a></li>     
                    <li><a href="{{route('admin.manage_areas')}}"><i class="fa fa-angle-right"></i>Manage Area</a></li>                 
                    </ul>
                </li>
               

               
            </ul>
         
        </div>

        @yield('content')


<script>
 var redirectPost = function (url, data = null, method = 'post') {
                    var form = document.createElement('form');
                    form.method = method;
                    form.action = url;
                    for (var name in data) {
                        var input = document.createElement('input');
                        input.type = 'hidden';
                        input.name = name;
                        input.value = data[name];
                        form.appendChild(input);
                    }
                    $('body').append(form);
                    form.submit();
                }
</script>

        
<!-- latest jquery-->
<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}" ></script>

<!-- Bootstrap js-->
<script src="{{asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}" ></script>

<!-- Chart JS-->
<script src="{{asset('assets/js/chart/Chart.min.js')}}"></script>

<!-- Morris Chart JS-->
<script src="{{asset('assets/js/morris-chart/raphael.js')}}"></script>
<script src="{{asset('assets/js/morris-chart/morris.js')}}"></script>

<!-- owlcarousel js-->
<script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}" ></script>

<!-- Sidebar jquery-->
<script src="{{asset('assets/js/sidebar-menu.js')}}" ></script>

<!--Sparkline  Chart JS-->
<script src="{{asset('assets/js/sparkline/sparkline.js')}}"></script>

<!--Height Equal Js-->
<script src="{{asset('assets/js/height-equal.js')}}"></script>

<!-- prism js -->
<script src="{{asset('assets/js/prism/prism.min.js')}}"></script>

<!-- clipboard js -->
<script src="{{asset('assets/js/clipboard/clipboard.min.js')}}" ></script>

<!-- custom card js  -->
<script src="{{asset('assets/js/custom-card/custom-card.js')}}" ></script>

<!-- Theme js-->
<script src="{{asset('assets/js/script.js')}}" ></script>
<!-- <script src="{{asset('assets/js/theme-customizer/customizer.js')}}"></script> -->
<!-- <script src="{{asset('assets/js/chat-sidebar/chat.js')}}"></script> -->
<script src="{{asset('assets/js/dashboard-default.js')}}" ></script>

<!--Datatable js-->
<script src="{{asset('assets/js/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatables/datatable.custom.js')}}"></script>

<!--Datepicker js-->
<script src="{{asset('assets/js/date-picker/datepicker.js')}}"></script>
<script src="{{asset('assets/js/date-picker/datepicker.en.js')}}"></script>
<script src="{{asset('assets/js/date-picker/datepicker.custom.js')}}"></script>

<!-- Counter js-->
<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>

<script src="{{asset('assets/js/notify/bootstrap-notify.min.js')}}"></script>
<script src="{{asset('assets/js/notify/index.js')}}"></script>
<script src="{{asset('assets/js/form-validation-custom.js')}}" ></script>

</body>

</html>
