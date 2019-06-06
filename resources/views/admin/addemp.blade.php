<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/flacto/vertical-blue-light/page-confirm-mail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Feb 2019 08:07:04 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App title -->
    <title>Add Account</title>

    <!-- App CSS -->
    <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/rounded.css')}}">
    <script src="{{asset('backend/js/modernizr.min.js')}}"></script>

</head>
<body>

    <div class="text-center logo-alt-box">
        <a href="{{route('admin/dashboard')}}" class="logo" style="margin-top: 0%;"><span class="text-inverse">Regi<span class="text-custom">ster</span></span></a>
    </div>

    <div class="wrapper-page">

        <div class="card card-body">
            <form action="{{route('create-emp')}}" method="POST" class="form-group" files=true enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="text-center col-md-12">
                    <h4 class="text-uppercase font-bold">Create an account</h4>
                    <small>EMPLOYEE</small>
                </div>
                <br>
               <!--  <center>
                    <select class="log-selection" id="selection-of-position-login" value="onclick">
                        <option selected="" disabled="">SELECT</option>
                        <option name"log-selection" value="SE01">Employee</option>
                    </select>
                </center> -->
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
                    <label>Middle Name</label>
                    <input type="text" name="middle_name" class="form-control">
                </div>
                <br>
                <div class="col-md-12">
                    <label>Department</label>
                    <select name="department" id="department" class="form-control">
                        <option name="department" id="department" class="form-control" value="0" disabled="" selected="">Select Department</option>

                        @if(count($showDept) > 0)

                            @foreach($showDept as $key)

                                <option name="department" id="department" class="form-control" value="{{$key->department}}">{{$key->department}}</option>

                            @endforeach

                        @endif

                        
                        <option name="department" id="department" class="form-control" value="others">Others</option>
                    </select> 
                    <div> 
                        <input type="text" name="others" class="form-control others" id="others" placeholder="Please Specify" style="display: none; margin-top: 30px">
                    </div>
                </div>
                <br>
                
                <br>
                <div>
                    <label>&nbsp; ID Number</label><br>
                    <input type="text" name="id_number" disabled="" class="employee-or-intern" id="unique-id-num-login" value="SE01"><input type="text" name="employee_num" class="rounded-id-input" id="id-number-login" required>
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

                <br>
                <div class="col-md-12"  style="text-align: right; margin-top: 5%;"><br>
                    <a class="btn btn-primary btn-md" href="{{route('admin/employeeactive')}}">Cancel</a>
                    <button class="btn btn-success btn-md" type="submit" onclick="created()">Create</button>
                </div>
            </form>
        </div>
        <!-- end card-box -->


    </div>
    <!-- end wrapper page -->




    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="{{asset('backend/js/jquery.min.js')}}"></script>
    <script src="{{asset('backend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('backend/js/detect.js')}}"></script>
    <script src="{{asset('backend/js/fastclick.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/js/showHide.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/plugins/input-masked/jquery.maskedinput.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/js/custom-input-masked.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('backend/js/jquery.core.js')}}"></script>
    <script src="{{asset('backend/js/jquery.app.js')}}"></script>

    <script>
        function Myfunction(){

            var x = document.getElementById('selection-of-position-login').value;

            return x;
        }
    </script>
    <script>
       function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#pic')
                .attr('src', e.target.result)
                .width(200)
                .height(200);

            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<script>
    $("input[type='image']").click(function() {
        $("input[id='images']").click();
    });
</script>


<script>
 $("#department").change(function(){
     if($(this).val()=="others")
     {    
         $("#others").show();
     }
     else
     {
        $("#others").hide();
    }
});
</script>

</body>

<!-- Mirrored from coderthemes.com/flacto/vertical-blue-light/page-confirm-mail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Feb 2019 08:07:04 GMT -->
</html>