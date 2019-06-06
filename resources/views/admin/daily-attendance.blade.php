<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/flacto/vertical-blue-light/widgets.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Feb 2019 08:06:26 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="{{asset('favicon.ico')}}"/>

    <title>Dashboard - Admin Panel</title>

    <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('backend/zlib/sweetalert/node_modules/sweetalert2/dist/sweetalert2.min.css')}}">

    <script src="{{asset('backend/js/modernizr.min.js')}}"></script>

</head>

<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="{{route('admin/dashboard')}}" class="logo">
                        <img src="{{asset('frontend/official-logo.png')}}" style="width: 70%">
                        <!--<span><img src="assets/images/logo.png" alt="logo" style="height: 20px;"></span>-->
                    </a>
                </div>
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="">
                        <div class="float-left">
                            <button class="button-menu-mobile open-left waves-effect waves-light">
                                <i class="zmdi zmdi-menu"></i>
                            </button>
                        </div>


                        <ul class="nav navbar-right float-right">


                            <li class="dropdown user-box list-inline-item">
                                <a href="#" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true">
                                    <img src="{{asset('backend/images/users/avatar-1.jpg')}}" alt="user-img" class="rounded-circle user-img">
                                    <div class="user-status away"><i class="zmdi zmdi-dot-circle"></i></div>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{route('logout')}}" class="dropdown-item"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                </ul>
                            </li>

                        </ul>

                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul>


                        <li class="has_sub active">
                            <a href="{{route('admin/dashboard')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-archive"></i> <span> View Record </span> <span class="menu-arrow"></span> </a>
                            <ul class="list-unstyled">
                                <li><a href="{{route('view-employee-record')}}">Employee</a></li>
                                <li><a href="{{route('view-int-record')}}">Interns</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-accounts"></i> <span> Accounts </span> <span class="menu-arrow"></span> </a>
                            <ul class="list-unstyled">
                                <li><a href="{{route('admin/employeeactive')}}">Employee</a></li>
                                <li><a href="{{route('admin/internactive')}}">Interns</a></li>
                            </ul>
                        </li>

                        <!---
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-accounts"></i> <span> DTR </span> <span class="menu-arrow"></span> </a>
                            <ul class="list-unstyled">
                                <li><a href="{{route('employee-dtr')}}">Employee</a></li>
                                <li><a href="{{route('intern-dtr')}}">Interns</a></li>
                            </ul>
                        </li>
                        --->

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-archive"></i> <span> Archives </span> <span class="menu-arrow"></span> </a>
                            <ul class="list-unstyled">
                                <li><a href="{{route('admin/employeearchive')}}">Employee</a></li>
                                <li><a href="{{route('admin/internarchive')}}">Interns</a></li>
                            </ul>
                        </li>

                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>

            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
             <div class="container-fluid">

              <!-- Page-Title -->
              <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title">Daily Attendance</h4>
                </div>
                <div class="col-lg-6">
                    
                </div>
            </div>



            <!-- end row -->

            <div class="row">
                
            </div>

            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="text-center card" style="min-height: 377px;">
                        <div class="card-body">
                            <div class="row">
                                <table width="100%">
                                    <th>Fullname</th>
                                    <th>Employee Number</th>
                                    <th>Position</th>
                                    <th>Status</th>
                                    <th>AM IN</th>
                                    <th>AM LATE</th>
                                    <th>PM LATE</th>
                                    <th>HALFDAY</th>
                                    <th>OT IN</th>
                                    <th>UNDERTIME</th>
                                    <th>LATE</th>
                                    <th>LOGOUT</th>


                                    

                                </table>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div> <!-- container-fluid -->

</div> <!-- content -->

    <footer class="footer">
        2019 © <span class="d-none d-sm-inline-block">Shoppetown</span>
    </footer>

</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


</div>
<!-- END wrapper -->


<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{asset('backend/js/jquery.min.js')}}"></script>
<script src="{{asset('backend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/js/detect.js')}}"></script>
<script src="{{asset('backend/js/fastclick.js')}}"></script>
<script src="{{asset('backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('backend/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('backend/js/waves.js')}}"></script>
<script src="{{asset('backend/js/wow.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('backend/js/jquery.scrollTo.min.js')}}"></script>

<!-- Counter Up  -->
<script src="{{asset('backend/waypoints/lib/jquery.waypoints.js')}}"></script>
<script src="{{asset('backend/counterup/jquery.counterup.min.js')}}"></script>

<!-- Sparkline -->
<script src="{{asset('backend/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

<!-- Page Specific js -->
<script src="{{asset('backend/pages/jquery.widgets.js')}}"></script>

<!-- App js -->
<script src="{{asset('backend/js/jquery.core.js')}}"></script>
<script src="{{asset('backend/js/jquery.app.js')}}"></script>

<!-- sweetalert -->
<script src="{{asset('backend/zlib/sweetalert/node_modules/sweetalert2/src/sweetalert2.js')}}"></script>
<script src="{{asset('backend/polyfill/promise.min.js')}}"></script>


<script type="text/javascript">
    $('#archive-button').click(function(){

        swal({
            title:"confirmation",
            text: "Are You Sure?",
            content: "input",
            buttons: {
                cancel: true,
                confirm: "Submit"
            }
        }).then( val => {
            if(val) {
                swal({
                    title: "Thanks!",
                    text: "You typed: " + val,
                    icon: "success"
                });
            }
        });
    });
</script>


</body>

<!-- Mirrored from coderthemes.com/flacto/vertical-blue-light/widgets.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Feb 2019 08:06:27 GMT -->
</html>