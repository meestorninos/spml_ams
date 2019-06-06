
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/flacto/vertical-blue-light/page-confirm-mail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Feb 2019 08:07:04 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{asset('favicon.ico')}}"/>

    <!-- App title -->
    <title>Pick Date to Filter</title>

    <!-- App CSS -->
    <script src="{{asset('backend/date-range-picker/jquery.slim.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/date-range-picker/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/date-range-picker/daterangepicker.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('backend/date-range-picker/daterangepicker.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/date-range-picker/bootstrap.min.css')}}">


    <link rel="stylesheet" type="text/css" href="{{asset('backend/date-range-picker/website.css')}}" />
    <link href="{{asset('backend/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/rounded.css')}}">

</head>
<body>
    <br>
    <div class="text-center logo-alt-box">
        <a href="index.html" class="logo" style="margin-top: 50%;"><span class="text-inverse">Time<span class="text-custom"> Record</span></span></a>
    </div>
    <br><br>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <table class="table table-bordered" style="text-align: center; vertical-align: middle;">
            <thead>
                <tr>
                    <th colspan="22">{{$check_daterange[0]->fullname}}</th>
                </tr>
            </thead>
            <thead>
                <tr>
                    <center><th colspan="11">{{$check_daterange[0]->position}}</th>
                    <th colspan="11">SO01{{$check_daterange[0]->employee_number}}</th></center>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td rowspan="2" colspan="2">Date</td>
                    <td rowspan="1" colspan="4">Morning</td>
                    <td rowspan="1" colspan="4">Afternoon</td>
                    <td rowspan="2" colspan="2">Late<br>(in Minutes)</td>
                    <td rowspan="1" colspan="4">Overtime</td>
                    <td rowspan="2" colspan="2">Undertime<br>(in Minutes)</td>
                    <td rowspan="2" colspan="2">Total Hours<br>(Including Overtime and Deductions)</td>
                </tr>
                <tr>
                    <td rowspan="1" colspan="2">IN</td>
                    <td rowspan="1" colspan="2">OUT</td>
                    <td rowspan="1" colspan="2">IN</td>
                    <td rowspan="1" colspan="2">OUT</td>
                    <td rowspan="1" colspan="2">IN</td>
                    <td rowspan="1" colspan="2">OUT</td>
                </tr>

            @if(count($check_daterange) > 0)    
                @foreach($check_daterange as $key)
                    <tr>
                        <td colspan="2">{{$key->Date}}</td>
                        <td colspan="2">{{$key->am_in}}</td>
                        <td colspan="2">{{$key->am_late}}</td>
                        <td colspan="2">{{$key->pm_late}}</td>
                        <td colspan="2">{{$key->late}}</td>
                        <td colspan="2">{{$key->ot_in}}</td>
                        <td colspan="2">{{$key->logout}}</td>
                        <td colspan="2">{{$key->undertime}}</td>
                        <td colspan="2">{{$key->total}}</td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
        <br>
        
    </div>

    <div style="margin-left: 20px;">
        <button class="btn btn-default" style="margin-right: 20px;">Print</button><a href="#" class="btn btn-primary">Download</a>
    </div>

</div>
<!-- end wrapper page -->



</body>
</html>