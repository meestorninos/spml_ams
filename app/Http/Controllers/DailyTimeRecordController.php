<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\EmployeeInfo;
use App\DailyTimeRecord;
use App\InternInfo;
use Carbon\Carbon;
use Alert;
class DailyTimeRecordController extends Controller
{
    public function loginForm()
    {
        //Alert::warning('Message', 'Optional Title')->autoclose(5000);
        return view('welcome');
    }
    public function welcomePage(Request $request)
    {
        // request input

    	$id_number = $request->input('id-number');

    	$password = $request->input('password');

        // carbon
        $time = Carbon::now();

        $currentTime = $time->toTimeString();

        $current_date = $time->format('Y-m-d');

        $am_in = $time->setTime(9, 00, 00)->toTimeString();

        $am_late = $time->setTime(11,59,00)->toTimeString();

        $pm_late = $time->setTime(14,01,00)->toTimeString();

        $amLate = $time->diffInMinutes($am_in);

        $pmLate = $time->diffInMinutes($pm_late);

        $halfday = $time->setTime(14,00,00)->toTimeString();

        $morning_halfday = $time->setTime(13,00,00)->toTimeString();

        $overtime = $time->diffForHumans();

        $logout = $time->setTime(18,00,00)->toTimeString();

        $current_daytitle = $time->format('l');

        $midnight_cut = $time->setTime(23,59,59)->toTimeString();

        $pm = "AFTERNOON";

        $am = "MORNING";

        $eve = 'EVENING';

        $sett;

        $oi = "INTERN";

        $ei = "EMPLOYEE";

        $workingStat = 'WORKING';

        $loggedOutStat = 'LOGGED OUT';

        // request
        $id_number = $request->input('id-number');

        $password = $request->input('password');

        //query to get the data who logged in
        $validate_intern_number = InternInfo::select('intern_id','intern_num','intern_firstname','intern_lastname','intern_middlename','intern_nickname','intern_image','intern_department','position')->get();

        $validate_emp_num = EmployeeInfo::select('emp_id','emp_num','emp_firstname','emp_lastname','emp_middlename','emp_nickname','emp_image','emp_department','position')->get();

        $val_am_check = DailyTimeRecord::select('am_in')->where(['employee_number' => $id_number, 'Date' => $current_date])->first();
        
        $check_user = DailyTimeRecord::select('employee_number')->where('employee_number', $id_number)->first();
        
        $check_date = DailyTimeRecord::where(['Date' => $current_date,'employee_number' => $id_number,'status' => 'WORKING'])->exists();



        $intern = $validate_intern_number;

        $employee = $validate_emp_num;

        if(InternInfo::select('intern_id')->where(['intern_num' => $id_number, 'intern_password' => $password])->exists()){

            if($check_date == true){

                // error handling    message                    subject
                Alert::warning('you have already logged in', 'Warning')->autoclose(1500);
                return back();

            }else{
                    
                    // morning

                if($currentTime <= $am_in){

                    $sett = $am;

                    $dtr = array(

                        'Date' => $current_date,
                        'fullname' => $intern[0]->intern_firstname . $intern[0]->intern_middlename . $intern[0]->intern_lastname,

                        'employee_number' => $intern[0]->intern_num,
                        'am_in' => $currentTime,
                        'position' => $intern[0]->position,
                        'status' => $workingStat
                    );

                    DailyTimeRecord::create($dtr);

                    return view('client.login')->with('validate_intern_number',$intern)->with('validate_emp_num',$employee)->with('current_time',$currentTime)->with('current_date',$current_date)->with('current_daytitle',$current_daytitle)->with('sett',$sett);

                    // am late

                }else if($currentTime > $am_in){

                    $sett = $am;

                    $dtr = array(

                        'Date' => $current_date,
                        'fullname' => $intern[0]->intern_firstname . $intern[0]->intern_middlename . $intern[0]->intern_lastname,

                        'employee_number' => $intern[0]->intern_num,
                        'am_late' => $currentTime,
                        'position' => $intern[0]->position,
                        'status' => $workingStat,
                        'late' => $amLate
                    );

                    DailyTimeRecord::create($dtr);

                    return view('client.login')->with('validate_intern_number',$intern)->with('validate_emp_num',$employee)->with('current_time',$currentTime)->with('current_date',$current_date)->with('current_daytitle',$current_daytitle)->with('sett',$sett);

                    //morning half day

                }else if($currentTime > $am_late && $currentTime <= $halfday){

                    $sett = $pm;

                    $dtr = array(

                        'Date' => $current_date,
                        'fullname' => $intern[0]->intern_firstname . $intern[0]->intern_middlename . $intern[0]->intern_lastname,

                        'employee_number' => $intern[0]->intern_num,
                        'halfday' => $currentTime,
                        'position' => $intern[0]->position,
                        'status' => $workingStat
                    );

                    DailyTimeRecord::create($dtr);

                    return view('client.login')->with('validate_intern_number',$intern)->with('validate_emp_num',$employee)->with('current_time',$currentTime)->with('current_date',$current_date)->with('current_daytitle',$current_daytitle)->with('sett',$sett);

                    // pm late

                }else if($currentTime >= $pm_late){

                    $sett = $pm;

                    $dtr = array(

                        'Date' => $current_date,
                        'fullname' => $intern[0]->intern_firstname . $intern[0]->intern_middlename . $intern[0]->intern_lastname,

                        'employee_number' => $intern[0]->intern_num,
                        'pm_late' => $currentTime,
                        'position' => $intern[0]->position,
                        'status' => $workingStat,
                        'late' => $pmLate
                    );

                    DailyTimeRecord::create($dtr);

                    return view('client.login')->with('validate_intern_number',$intern)->with('validate_emp_num',$employee)->with('current_time',$currentTime)->with('current_date',$current_date)->with('current_daytitle',$current_daytitle)->with('sett',$sett);

                    // ot in

                }else if($currentTime > $logout && $currentTime > $midnight_cut){

                    $sett = $pm;

                    $dtr = array(

                        'Date' => $current_date,
                        'fullname' => $intern[0]->intern_firstname . $intern[0]->intern_middlename . $intern[0]->intern_lastname,

                        'employee_number' => $intern[0]->intern_num,
                        'ot_in' => $currentTime,
                        'position' => $intern[0]->position,
                        'status' => $workingStat
                    );

                    DailyTimeRecord::create($dtr);

                    return view('client.login')->with('validate_intern_number',$intern)->with('validate_emp_num',$employee)->with('current_time',$currentTime)->with('current_date',$current_date)->with('current_daytitle',$current_daytitle)->with('sett',$sett);

                }

            }

        }else if(EmployeeInfo::select('emp_id')->where(['emp_num' => $id_number, 'emp_password' => $password])->exists()){

            // morning

           if($check_date == true){

                // error handling    message                    subject
                Alert::warning('you have already logged in', 'Warning')->autoclose(1500);
                return back();

           }else{

                if($currentTime <= $am_in){

                    $sett = $am;

                    $dtr = array(

                        'Date' => $current_date,
                        'fullname' => $employee[0]->emp_lastname.', '.$employee[0]->emp_firstname.' '.$employee[0]->emp_middlename,

                        'employee_number' => $employee[0]->emp_num,
                        'am_in' => $currentTime,
                        'position' => $employee[0]->position,
                        'status' => $workingStat
                    );

                    DailyTimeRecord::create($dtr);

                    return view('client.login')->with('validate_intern_number',$intern)->with('validate_emp_num',$employee)->with('current_time',$currentTime)->with('current_date',$current_date)->with('current_daytitle',$current_daytitle)->with('sett',$sett);

                    // am late

                }else if($currentTime > $am_in){

                    $sett = $am;

                    $dtr = array(

                        'Date' => $current_date,
                        'fullname' => $employee[0]->emp_lastname.', '.$employee[0]->emp_firstname.' '.$employee[0]->emp_middlename,

                        'employee_number' => $employee[0]->emp_num,
                        'am_late' => $currentTime,
                        'position' => $employee[0]->position,
                        'status' => $workingStat,
                        'late' => $amLate
                    );

                    DailyTimeRecord::create($dtr);

                    return view('client.login')->with('validate_intern_number',$intern)->with('validate_emp_num',$employee)->with('current_time',$currentTime)->with('current_date',$current_date)->with('current_daytitle',$current_daytitle)->with('sett',$sett);

                    //morning half day

                }else if($currentTime > $am_late && $currentTime <= $halfday){

                    $sett = $pm;

                    $dtr = array(

                        'Date' => $current_date,
                        'fullname' => $employee[0]->emp_lastname.', '.$employee[0]->emp_firstname.' '.$employee[0]->emp_middlename,

                        'employee_number' => $employee[0]->emp_num,
                        'halfday' => $currentTime,
                        'position' => $employee[0]->position,
                        'status' => $workingStat
                    );

                    DailyTimeRecord::create($dtr);

                    return view('client.login')->with('validate_intern_number',$intern)->with('validate_emp_num',$employee)->with('current_time',$currentTime)->with('current_date',$current_date)->with('current_daytitle',$current_daytitle)->with('sett',$sett);

                    // pm late

                }else if($currentTime >= $pm_late){

                    $sett = $pm;

                    $dtr = array(

                        'Date' => $current_date,
                        'fullname' => $employee[0]->emp_lastname.', '.$employee[0]->emp_firstname.' '.$employee[0]->emp_middlename,

                        'employee_number' => $employee[0]->emp_num,
                        'pm_late' => $currentTime,
                        'position' => $employee[0]->position,
                        'status' => $workingStat,
                        'late' => $pmLate
                    );

                    DailyTimeRecord::create($dtr);

                    return view('client.login')->with('validate_intern_number',$intern)->with('validate_emp_num',$employee)->with('current_time',$currentTime)->with('current_date',$current_date)->with('current_daytitle',$current_daytitle)->with('sett',$sett);

                    // ot in

                }else if($currentTime > $logout && $currentTime > $midnight_cut){

                    $sett = $pm;

                    $dtr = array(

                        'Date' => $current_date,
                        'fullname' => $employee[0]->emp_lastname.', '.$employee[0]->emp_firstname.' '.$employee[0]->emp_middlename,

                        'employee_number' => $employee[0]->emp_num,
                        'ot_in' => $currentTime,
                        'position' => $employee[0]->position,
                        'status' => $workingStat
                    );

                    DailyTimeRecord::create($dtr);

                    return view('client.login')->with('validate_intern_number',$intern)->with('validate_emp_num',$emp)->with('current_time',$currentTime)->with('current_date',$current_date)->with('current_daytitle',$current_daytitle)->with('sett',$sett);

                }// end elseif for employee

                // // //end r0

           }

        }else{

            // error handling    message                    subject
            Alert::warning('Invalid Information', 'Warning')->autoclose(1500);
            return back();
        }
        
    }
        //no credentials

    public function outPage(Request $request)
    {
       
        $pm = "AFTERNOON";

        $am = "MORNING";

        $eve = 'EVENING';

        $sett;

        $time = Carbon::now();

        $currentTime = $time->toTimeString();

        $current_date = $time->format('Y-m-d');

        $id_number = $request->input('id-number');

        $password = $request->input('password');

        //query to get the data who logged in

        $validate_intern_number = DB::table('intern_infos')->select('intern_num','intern_firstname','intern_lastname','intern_middlename','intern_nickname','intern_image','intern_department','position')->where(['intern_num' => $id_number,'intern_password' => $password])->get();

        $validate_emp_num = DB::table('employee_infos')->select('emp_num','emp_firstname','emp_lastname','emp_middlename','emp_nickname','emp_image','emp_department','position')->where(['emp_num' => $id_number,'emp_password' => $password])->get();

        $intern = $validate_intern_number;

        $employee = $validate_emp_num;

        $data = $id_number . $password;

        $check_status = DailyTimeRecord::select('status')->where('status','WORKING')->first();

        $check_data = DailyTimeRecord::select('employee_number','Date')->where(['employee_number' => $id_number, 'Date' => $current_date])->first();

        $find_id = DailyTimeRecord::select('employee_number')->where('employee_number', $id_number)->first();

        $val_int = InternInfo::where(['intern_num' => $id_number, 'intern_password' => $password])->exists();

        $val_emp = EmployeeInfo::where(['emp_num' => $id_number, 'emp_password' => $password])->exists();


        if($val_int == true){

            

                $check = array(

                    'logout' => $currentTime,
                    'status' => 'LOGGED OUT'
                );

                DailyTimeRecord::where(['employee_number' => $id_number, 'Date' => $current_date])->update($check);

                return view('client.logout')->with('validate_intern_number',$validate_intern_number)->with('validate_emp_num',$validate_emp_num)->with('current_time',$currentTime)->with('current_date',$current_date);

        }else if($val_emp == true){

                $check = array(

                    'logout' => $currentTime,
                    'status' => 'LOGGED OUT'
                );

                DailyTimeRecord::where(['employee_number' => $id_number, 'Date' => $current_date])->update($check);

                return view('client.logout')->with('validate_intern_number',$validate_intern_number)->with('validate_emp_num',$validate_emp_num)->with('current_time',$currentTime)->with('current_date',$current_date);

                // error handling    message                    subject
                Alert::warning('you need to log in first', 'Attention')->autoclose(1500);
                return back();

        }else{

            // error handling    message                    subject
            Alert::warning('Invalid Information', 'Warning')->autoclose(1500);
            return back();
        }

    }
    
}

// view page 

// return view ('client.login')->with('validate_intern_number',$validate_intern_number)->with('validate_emp_num',$validate_emp_num)->with('current_time',$current_time)->with('current_date2',$current_date2)->with('current_daytitle',$current_daytitle)->with('sett',$sett);

// request input
   
    
