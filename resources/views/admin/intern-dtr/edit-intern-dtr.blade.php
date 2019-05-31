<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/flacto/vertical-blue-light/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Feb 2019 08:06:38 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="icon" type="image/png" href="{{asset('favicon.ico')}}"/>

    <title>Intern Records</title>

    <!-- DataTables -->
    <link href="{{asset('backend/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/plugins/datatables/fixedHeader.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('backend/plugins/datatables/scroller.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/style1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/backend/sweetalert/node_modules/sweetalert2/dist/sweetalert2.min.css')}}">

    <script src="{{asset('backend/js/modernizr.min.js')}}"></script>
    <!--PICK -->
    <link href="{{asset('backend/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/plugins/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

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
                        <i class="zmdi zmdi-toys icon-c-logo"></i><span>Shoppe<span>town</span></span>
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

                        <form role="search" class="navbar-left app-search">
                           <input type="text" placeholder="Search..." class="form-control">
                           <a href="#"><i class="fa fa-search"></i></a>
                       </form>

                       <ul class="nav navbar-right float-right">
                        <li class="list-inline-item">
                            <!-- Notification -->
                            <div class="notification-box">
                                <ul class="list-inline m-b-0">
                                    <li>
                                        <a href="javascript:void(0);" class="right-bar-toggle">
                                            <i class="zmdi zmdi-notifications-none"></i>
                                        </a>
                                        <div class="noti-dot">
                                            <span class="dot"></span>
                                            <span class="pulse"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Notification bar -->
                        </li>

                        <li class="dropdown user-box list-inline-item">
                            <a href="#" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true">
                                <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="rounded-circle user-img">
                                <div class="user-status away"><i class="zmdi zmdi-dot-circle"></i></div>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="javascript:void(0)" class="dropdown-item"><i class="ti-user m-r-5"></i> Profile</a></li>
                                <li><a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                <li><a href="javascript:void(0)" class="dropdown-item"><i class="ti-power-off m-r-5"></i> Logout</a></li>
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
                    -->
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

        </div>
    </div>
    <!-- Left Sidebar End -->

        <div class="wrapper-page">

            <div class="card card-body">
                <form action="{{route('create-intern')}}" method="POST" class="form-group" files=true enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="text-center col-md-12">
                        <h4 class="text-uppercase font-bold">Edit</h4>
                        <small>FOR INTERN</small>
                     </div>
                    <br>
                    <!-- <center>
                        <select class="log-selection" id="selection-of-position-login" value="onclick">
                            <option selected="" disabled="">Employee or Intern</option>
                            <option name"log-selection" value="SE01">Employee</option>
                            <option name"log-selection" value="SO01">Intern</option>
                        </select>
                    </center> -->
                    <br>
                    <center><input type="image" class="rounded-circle" id="pic" src="{{ asset('backend/images/2x2.png')}}" width="200px" style="max-width:200px; background-size: contain" /></center>
                        <input type="file" class="form-control-file" id="images" name="images" onChange="readURL(this)" id="exampleInputFile" aria-describedby="fileHelp" style="display: none">
                        <br>
                        <center><p>Please click on the circle for upload image</p></center>
                    <br>
                    <div class="col-md-12">
                        <label>First Name</label>
                        <input type="text" name="first_name" class="form-control" required>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <label>Last Name</label>
                        <input type="text" name="last_name" class="form-control" required>
                    </div>
                    <br>

                    <div class="col-md-12">
                        <label>Nickname</label>
                        <input type="text" name="nick_name" class="form-control" required>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <label>Middlename</label>
                        <input type="text" name="middle_name" class="form-control">
                    </div>
                    <br>
                    <div class="col-md-12">
                        <label>Department</label>
                        <select name="department" id="department" class="form-control">
                            <option name="department" id="department" class="form-control" value="" disabled="" selected="">Select Department</option>
                            <option name="department" id="department" class="form-control" value="Marketing">Marketing</option>
                            <option name="department" id="department" class="form-control" value="Engineering">Engineering</option>
                            <option name="department" id="department" class="form-control" value="Leasing">Leasing</option>
                            <option name="department" id="department" class="form-control" value="IT">IT</option>
                            <option name="department" id="department" class="form-control" value="Human Resources">Human Resources</option>
                            <option name="department" id="department" class="form-control" value="others">Others</option>
                        </select>
                        <input type="text" name="others" class="form-control others" id="others" placeholder="Please Specify" style="display: none;">
                    </div>
                    <br>
                    
                    <br>
                    <div>
                        <label>&nbsp; ID Number</label><br>
                        <input type="text" name="id_number" disabled="" class="employee-or-intern" id="unique-id-num-login" value="SO01"><input type="text" name="intern_number" class="rounded-id-input" id="id-number-login" required>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <label>Password</label><br>
                        <input type="password" name="password" class="form-control"required>
                    </div>
                    <div class="col-md-12"><br>
                        <label> Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control" required>
                    </div>
                    <br>

                     <div class="col-md-12"  style="text-align: right; margin-top: 5%;"><br>
                        <a class="btn btn-primary btn-md" href="{{route('admin/internactive')}}">Cancel</a>
                        <button class="btn btn-success btn-md" type="submit" onclick="created()">Create</button>
                    </div>
               </form>
            </div>
            <!-- end card-box -->


        </div>
        <!-- end wrapper page -->

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

<!-- Datatables-->
<!-- Required datatable js-->
<script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<!-- Buttons examples -->
<script src="{{asset('backend/plugins/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>

<script src="{{asset('backend/plugins/datatables/jszip.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/pdfmake.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/vfs_fonts.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/buttons.html5.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/buttons.print.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/dataTables.scroller.min.js')}}"></script>

<!-- Responsive examples -->
<script src="{{asset('backend/plugins/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

<!-- Datatable init js -->
<script src="{{asset('backend/pages/jquery.datatables.init.js')}}"></script>

<!-- App js -->
<script src="{{asset('backend/js/jquery.core.js')}}"></script>
<script src="{{asset('backend/js/jquery.app.js')}}"></script>

<!-- sweetalert -->
<script src="{{asset('backend/backend/sweetalert/node_modules/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>
<script type="text/javascript" src="{{asset('backend/js/custom-sweetalerts.js')}}"></script>

<script src="{{asset('backend/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('backend/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>



<script>
    $(document).ready(function() {
        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable( { keys: true } );
        $('#datatable-responsive').DataTable();
        $('#datatable-scroller').DataTable( { ajax: "../plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
        var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
    } );
    TableManageButtons.init();
</script>

<script>
    $(document).ready(function() {
        $('#datatable1').dataTable();
        $('#datatable-keytable').DataTable( { keys: true } );
        $('#datatable-responsive').DataTable();
        $('#datatable-scroller').DataTable( { ajax: "../plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
        var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
    } );
    TableManageButtons.init();
</script>

<script>
    jQuery('#date-range').datepicker({
        toggleActive: true
    });

</script>

</body>

<!-- Mirrored from coderthemes.com/flacto/vertical-blue-light/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Feb 2019 08:06:48 GMT -->
</html>