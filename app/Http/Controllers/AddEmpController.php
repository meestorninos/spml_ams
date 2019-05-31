<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\EmployeeInfo;
use App\InternInfo;
use App\DailyTimeRecord;
use App\Department;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Exports\DTRExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Alert;



class AddEmpController extends Controller
{

    protected function validator(array $request)
    {
        return Validator::make($request, [
            'image' => 'image|mimes:jpeg,png,jpg,svg',
        ]);
    }

    public function employeeForm()
    {
        $showDept = Department::all();

        return view('admin.addemp')->with('showDept', $showDept);
    }

    public function create(Request $request)
    {
        $file = $request->file('image');
                $pic = "";
                    $date = $request['employee_num'];
                    $extension = $request->file('images')->getClientOriginalExtension();
                    $pic = "images/".$date.'.'.$extension;
                    $request->file('images')->move("images",$pic);  

        $request_id = $request->input('employee_num');

        $check_number = EmployeeInfo::where('emp_num', $request_id)->first();

        if($check_number === null){

            $employee = EmployeeInfo::create([

                'emp_firstname' => $request->first_name,
                'emp_num' => $request->employee_num,
                'emp_lastname' => $request->last_name,
                'emp_middlename' => $request->middle_name,
                'emp_nickname' => $request->nick_name,
                'emp_department' => $request->others,
                'emp_password' => $request->password,
                'status' => 'active',
                'emp_image' => $pic,
            ]);

            $dept = Department::create([

                'department' => $request->others
            ]);

            return redirect('admin/employeeactive')->with('employee', $employee,'dept', $dept);

        }else{

            Alert::warning('ID Number Already Exists!', 'Warning')->autoclose(3000);
                    return back();
        }
        
    }

    public function employeedtr()
    {
        return view('admin.employee.employee-dtr');
    }

    public function back(){

        return redirect()->back();
    }
    public function checkempdtr(Request $request)
    {
        $oi = "INTERN";
        $ei = "EMPLOYEE";
        $start = $request->input('start');
        $end = $request->input('end');
        $check_start = Carbon::parse($start)->toFormattedDateString();
        $check_end = Carbon::parse($end)->toFormattedDateString();
        $check_daterange = DB::table('daily_time_records')->select('fullname','employee_number','position','am_in','am_late','pm_late','ot_in','ot_out','Date','late','undertime','total')->where('position',$ei)->whereBetween('Date',[$check_start,$check_end])->get();
        $time = Carbon::now();
        $current_time2 = $time->toTimeString();
        $current_date3 = $time->toFormattedDateString();
        $am_in = $time->setTime(9, 00)->toTimeString();
        $halfday = $time->setTime(13,00)->toTimeString();
        $carbon = new Carbon; 
        return view('admin.employee.dtrview',compact('check_daterange'));
    }
    public function export() 
    {
        return Excel::download(new DTRExport, 'dtr.xlsx');
    }
}
