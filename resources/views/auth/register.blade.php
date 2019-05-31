<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/flacto/vertical-blue-light/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Feb 2019 08:07:04 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="icon" type="image/png" href="{{asset('favicon.ico')}}"/>

        <!-- App title -->
        <title>Admin Panel - Register</title>

        <!-- App CSS -->
        <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/css/style.css')}}" rel="stylesheet" type="text/css" />

        <script src="{{asset('backend/assets/js/modernizr.min.js')}}"></script>

    </head>
    <body>

        <div class="text-center logo-alt-box">
            <img src="{{asset('frontend/official-logo.png')}}" style="width: 20%">
            <h5 class="text-muted m-t-0">Responsive Admin Panel</h5>
        </div>

        <div class="wrapper-page">

            <div class="m-t-30 card card-body">
                <div class="text-center">
                    <h4 class="text-uppercase font-bold">Register</h4>
                </div>
                <div class="p-2">
                    <form class="form-horizontal m-t-10" action="{{route('register')}}" method="POST">
                        @csrf
                        <div class="form-group ">
                            <div class="col-12">
                                <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" id="name" required="" placeholder="Name"
                                value="{{ old('name') }}" name="name">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-12">
                                <input id="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" required="" placeholder="E-Mail Address" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <div class="col-12">
                                <input id="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" required="" placeholder="Password">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-12">
                                <input class="form-control" type="password" required="" placeholder="Confirm Password" name="password_confirmation" id="password-confirm">
                            </div>
                        </div>

                        

                        <div class="form-group text-center m-t-30">
                            <div class="col-12">
                                <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light text-uppercase" type="submit">
                                    Register
                                </button>
                            </div>
                        </div>

                        

                    </form>

                </div>
            </div>
            <!-- end card-box -->

            <div class="row">
                <div class="col-sm-12 text-center">
                    <p class="text-muted">Already have account?<a href="{{route('login')}}" class="text-primary m-l-5"><b>Sign In</b></a></p>
                </div>
            </div>

        </div>
        <!-- end wrapper page -->




        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/detect.js')}}"></script>
        <script src="{{asset('backend/assets/js/fastclick.js')}}"></script>
        <script src="{{asset('backend/assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('backend/assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('backend/assets/js/waves.js')}}"></script>
        <script src="{{asset('backend/assets/js/wow.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('backend/assets/js/jquery.scrollTo.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('backend/assets/js/jquery.core.js')}}"></script>
        <script src="{{asset('backend/assets/js/jquery.app.js')}}"></script>

    </body>

<!-- Mirrored from coderthemes.com/flacto/vertical-blue-light/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Feb 2019 08:07:04 GMT -->
</html>