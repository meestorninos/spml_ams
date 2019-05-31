<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\EmployeeInfo;
use App\DailyTimeRecord;
use App\InternInfo;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $time = new Carbon;

        $current_time = $time->toTimeString();

        $currentDate = $time->format('Y-m-d');

        $date = $time->toFormattedDateString();

        // counting of total active account of employee

        $emp = 'EMPLOYEE';

        $int = 'INTERN';

        $emp_present = DailyTimeRecord::select('Date','position')->where(['position' => $emp, 'Date' => $currentDate])->count();

        $int_present = DailyTimeRecord::select('Date','position')->where(['position' => $int, 'Date' => $currentDate])->count();

        $get_present = $emp_present + $int_present;

        $employee = EmployeeInfo::count();


        // counting of total active account of intern

        $intern = InternInfo::count();

        $result = $employee + $intern;

        return view('admin.dashboard')->with(['employee' => $employee, 'intern' => $intern,'result' => $result, 'current_time' => $current_time, 'currentDate' => $currentDate,'date' => $date, 'int_present' => $int_present, 'emp_present' => $emp_present, 'get_present' => $get_present]);
    }
}
