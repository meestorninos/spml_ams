<?php

namespace App\Http\Controllers;

use App\DailyTimeRecord;
use App\EmployeeInfo;
use App\InternInfo;
use App\Department;
use DB;

use Carbon\Carbon;

use Illuminate\Http\Request;

class ViewRecordController extends Controller
{
    public function employeeRecord(){

        $employee_record = DailyTimeRecord::all();

        return view('admin.view-emp-record')->with('employee_record',$employee_record);
    }

    public function internRecord(Request $request){


        $intern_record = DailyTimeRecord::all();

        return view('admin.view-int-record')->with('intern_record', $intern_record);

    }

    public function dailyAttendance(){

        $carbon = Carbon::now();

        $error;

        $current_date  = $carbon->format('Y-m-d');

        $daily_present = DailyTimeRecord::all();
        
        return view('admin.daily-attendance')->with('daily_present',$daily_present);

    }
}
