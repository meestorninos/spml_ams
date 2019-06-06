<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\EmployeeInfo;
use App\InternInfo;
use App\DailyTimeRecord;
use App\department;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Exports\DTRExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use Alert;

class AddInternController extends Controller
{
    protected function validator(array $request)
    {
        return Validator::make($request, [
            'image' => 'image|mimes:jpeg,png,jpg,svg',
        ]);
    }

    public function index()
    {
        $showInt = Department::all();
        return view('admin.addIntern')->with('showInt', $showInt);
    }

    public function create(Request $request)
    {
        $file = $request->file('image');
                $pic = "";
                    $date = $request['intern_number'];
                    $extension = $request->file('images')->getClientOriginalExtension();
                    $pic = "images/".$date.'.'.$extension;
                    $request->file('images')->move("images",$pic);  


        $request_id = $request->input('intern_number');

        // checking if the request id number do not exist in the database

        $check_number = InternInfo::where('intern_num', $request_id)->first();

        if($check_number === null){

             $intern = InternInfo::create([

                'intern_firstname' => $request->first_name,
                'intern_num' => $request->intern_number,
                'intern_lastname' => $request->last_name,
                'intern_middlename' => $request->middle_name,
                'intern_nickname' => $request->nick_name,
                'intern_department' => $request->others,
                'intern_password' => $request->password,
                'status' => 'active',
                'intern_image' => $pic,
                
            ]);

            $dept = Department::create([

                'department' => $request->others
            ]);

            return '<script>alert("Data Successfully Added")</script>' . redirect('admin/internactive')->with('intern', $intern, 'dept', $dept);

        }else{

            return 'id number already exist';

            
        }

    }

    public function editDTR($id){

        $showDept = department::all();

        $showImage = EmployeeInfo::all();

        return view('admin.intern-dtr.edit-intern-dtr')->with([
            'showDept' => $showDept,
            'showImage' => $showImage,
        ]);
    }

    public function interndtr()
    {
        $intern_dtr = DailyTimeRecord::all();

        return view('admin.intern-dtr.intern-dtr')->with('intern-dtr',$intern_dtr);
    }
    public function checkinterndtr(Request $request)
    {   
        $oi = "INTERN";
        $ei = "EMPLOYEE";
        $start = $request->input('start');
        $end = $request->input('end');
        $che_st = Carbon::parse($start)->format('Y-m-d');
        $che_en = Carbon::parse($end)->format('Y-m-d');
        $check_daterange = DB::table('daily_time_records')->select('fullname','employee_number','position','am_in','ot_in','ot_out','Date','late','undertime','total')->where('position',$oi)->whereBetween('Date',[$che_st,$che_en])->get()->groupBy('Date')->unique('fullname');
        $check_daterange2 = DB::table('daily_time_records')->select('fullname','employee_number','position','am_in','ot_in','ot_out','Date','late','undertime','total')->where('position',$oi)->whereBetween('Date',[$che_st,$che_en])->get();
        $time = Carbon::now();
        $current_time2 = $time->toTimeString();
        $current_date3 = $time->toFormattedDateString();
        $am_in = $time->setTime(9, 00)->toTimeString();
        $halfday = $time->setTime(13,00)->toTimeString();
        $carbon = new Carbon;
        return view('admin.intern-dtr.dtrview',compact('check_daterange','check_daterange2'));
    }

    public function showInfo($id)
    {
        $dtr = DailyTimeRecord::find($id);
        return view('admin.showdtr')->with('dtr', $dtr);
    }
    public function export() 
    {
         return Excel::download(new DTRExport, 'dtr.xlsx');
    }
}
