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
            @foreach($check_daterange as $key)
                <tr>
                    <td colspan="2">{{$key->Date}}</td>
                    <td colspan="2">{{$key->am_in}}</td>
                    <td colspan="2">{{$key->am_out}}</td>
                    <td colspan="2">{{$key->pm_in}}</td>
                    <td colspan="2">{{$key->pm_out}}</td>
                    <td colspan="2">{{$key->late}}</td>
                    <td colspan="2">{{$key->ot_in}}</td>
                    <td colspan="2">{{$key->ot_out}}</td>
                    <td colspan="2">{{$key->undertime}}</td>
                    <td colspan="2">{{$key->total}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>