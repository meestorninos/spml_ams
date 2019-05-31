<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width" initial-scale=1.0>
    <title>SHOPPETOWN HR</title>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="{{asset('favicon.ico')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/custom-fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/background.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/card.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/rounded.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/custom-fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/hide.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/lib/wow/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/typography-line.css')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>
<body class="background1">

   <div class="container">
        <div class="row">
            <div class="card1  col-md-12 col-sm-12 col-xs-12">


                <div class="left-info1 col-md-5 col-sm-5 col-xs-5 left-background1">
                    <div class="left-border col-md-12 col-sm-12 col-xs-12">
                        <center><p class="day-header" id="mon-sun"></p></center>
                        <center><h6 class="login-date1" id="login-date"><span></span></h6></center>
                        <h1 class=" wow fadeIn" id="clock"></h1>
                    </div>
                </div>


                <div class="right-info1 col-md-7 col-sm-7 col-xs-7 right-background1">
                    <h3 id="main-header">WELCOME TO <br><img src="{{asset('frontend/official-logo.png')}}" style="width: 80%"></h3>
                    <h3 class="hide-div wow fadeIn" id="login-header">LOG IN</h3>
                    <h3 class="hide-div wow fadeIn" id="logout-header">LOG OUT</h3><br>
                    

                    <div class="container col-md-12 col-sm-12 col-xs-12">
                        <button type="button" class="btn btn-success rounded-buttons-large" id="showLoginButton">Log in</button>
                        <div class="container hide-div col-md-12 col-sm-12 col-xs-12 wow fadeIn" id="loginInputs">
                            <form action="{{route('client-login')}}" class="form-group" method="POST">
                                {{ csrf_field() }}
                                <center>
                                    <select class="log-selection" id="selection-of-position-login">
                                        <option selected="" disabled="">Employee or Intern</option>
                                        <option value="SE01">Employee</option>
                                        <option value="SO01">Intern</option>
                                    </select>
                                </center>
                                <center><div class="form-group">
                                    <input type="text" name="id-number" disabled="" class="employee-or-intern " id="unique-id-num-login"><input type="text" class="rounded-id-input" id="id-number-login" name="id-number" placeholder="Enter your ID number" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control rounded-input" id="pwd-login" name="password" placeholder="Enter your Password" required>
                                </div></center>
                                <div class="container col-md-12 col-sm-12 col-xs-12 small-buttons-container">
                                    <button type="button" class="btn rounded-buttons-small  col-md-6 col-sm-6 col-xs-6 cancel-button" id="backLoginButton">Cancel</button>
                                        <button type="submit" class="btn btn-success rounded-buttons-small col-md-6 col-sm-6 col-xs-6" id="next-login-button">Next</button>
                                    <!-- </a> -->
                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="container col-md-12 col-sm-12 col-xs-12">
                        <button type="button" class="btn rounded-buttons-large" id="showLogoutButton">Log out</button>
                        <div class="container hide-div col-md-12 col-sm-12 col-xs-12 wow fadeIn" id="logoutInputs">
                            <form method="POST" action="{{route('client-logout')}}" class="form-group">

                            {{ csrf_field() }}

                                <center>
                                    <select class="log-selection" id="selection-of-position-logout">
                                        <option selected="" disabled="">Employee or Intern</option>
                                        <option value="SE01">Employee</option>
                                        <option value="SO01">Intern</option>
                                    </select>
                                </center>

                                <center>

                                    <div class="form-group">
                                        <input type="text" name="id-number-logout" disabled="" class="employee-or-intern " id="unique-id-num-logout"><input type="text" class="rounded-id-input" name="id-number" id="id-number-logout" placeholder="Enter your ID number">
                                    </div>

                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control rounded-input" id="pwd-logout" placeholder="Enter your Password" required="">
                                    </div>

                                </center>

                                <div class="container col-md-12 col-sm-12 col-xs-12 small-buttons-container">
                                    <button type="submit" class="btn rounded-buttons-small  col-md-6 col-sm-6 col-xs-6 cancel-button" id="backLogoutButton">Cancel</button>

                                    <button type="submit" class="btn btn-success rounded-buttons-small col-md-6 col-sm-6 col-xs-6" id="next-logout-button">Next
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>                                      
                </div>  
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/clock.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/showHide.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/lib/input-masked/jquery.maskedinput.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/enter-next.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/custom-input-masked.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/name-of-day.js')}}"></script>
    <script src="{{asset('frontend/lib/wow/wow.min.js')}}"></script>
    
    <script>
        new WOW().init();
    </script>

    <script src="{{asset('backend/sw/sweetalert/sweetalert.min.js')}}"></script>
        @include('sweet::alert')
    </body>
    </html>