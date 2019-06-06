<!DOCTYPE html>
<html>
<head>
    <title>Time in</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/custom-fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/background.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/card.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/rounded.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/custom-fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/hide.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/lib/wow/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/typography-line.css')}}">
</head>
<body class="background2" id="landing-page">

    <div class="container">
        <div class="row">
            <div class="card2  col-md-12 col-sm-12 col-xs-12">
                @if(!empty($validate_emp_num[0]))
                <div class="left-info col-md-5 col-sm-5 col-xs-5 left-background">
                    <p><h1 class="day2"> {{$current_daytitle}}</h1><br><h2 class="date2">{{$current_date}}</h2>
                        <h6 class="time2">{{$current_time}}</h6>
                        <h6 class="greetings">GOOD {{$sett}} {{$validate_emp_num[0]->emp_nickname}}</h6></p>
                    </div>
                    <div class="right-info col-md-7 col-sm-7 col-xs-7 right-background">
                        <img src="{{$validate_emp_num[0]->emp_image}}" class="my-picture">
                        <p><h2><b class="surname">{{$validate_emp_num[0]->emp_lastname}},</b> <b>{{$validate_emp_num[0]->emp_firstname}}</b></h2>
                            <h4>{{$validate_emp_num[0]->emp_department}}</h4>
                            <h4>SE01{{$validate_emp_num[0]->emp_num}}</h4>
                            <p class="redirect-timer">
                                Your account will be Logged out in <span id="countdown">10</span> seconds <br> or <br>Press Enter to automatically redirect
                            </p>
                        </p>
                    </div>
                @endif
                @if(!empty($validate_intern_number[0]))
                <div class="left-info col-md-5 col-sm-5 col-xs-5 left-background">
                    <p><h3 class="day2"> {{$current_daytitle}}</h3><h2 class="date2">{{$current_date}}</h2>
                        <h6 class="time2">{{$current_time}}</h6>
                        <h6 class="greetings">GOOD {{$sett}} {{$validate_intern_number[0]->intern_nickname}}</h6></p>
                    </div>
                    <div class="right-info col-md-7 col-sm-7 col-xs-7 right-background">
                        <img src="{{$validate_intern_number[0]->intern_image}}" class="my-picture">
                        <p><h2><b class="surname">{{$validate_intern_number[0]->intern_lastname}},</b> <b>{{$validate_intern_number[0]->intern_firstname}}</b></h2>
                            <h4>{{$validate_intern_number[0]->intern_department}}</h4>
                            <h4>SO01{{$validate_intern_number[0]->intern_num}}</h4>
                            <p class="redirect-timer">
                                Your account will be Logged out in <span id="countdown">10</span> seconds <br> or <br>Press Enter to automatically redirect
                            </p>
                        </p>
                    </div>
                @endif
                </div>  
            </div>
        </div>

    <style>
        .time2{

            margin-left: 70px;
        }
    </style>


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

        
        <script type="text/javascript">

        // Total seconds to wait
        var seconds = 15;

        function countdown() 
        {
            seconds = seconds - 1;
            if (seconds < 0)
            {
                // Change your redirection link here
                window.location = "{{route('welcome')}}";
            } 
            else 
            {
                
            // Update remaining seconds
            document.getElementById("countdown").innerHTML = seconds;

            // Count down using javascript
            window.setTimeout("countdown()", 1000);
        }

    }   
        // Run countdown function
        countdown();

    </script>
    <script type="text/javascript">
        document.body.addEventListener("keydown", function (event) {
            if (event.keyCode === 13) {
                window.location.replace("{{route('welcome')}}");
            }
        });
    </script>
</body>
</html>