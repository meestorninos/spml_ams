<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\EmployeeInfo;
use App\DailyTimeRecord;
use App\InternInfo;


class DailyTimeRecordController extends Controller
{
    public function loginForm()
	{
		return view('welcome');
	}

    public function welcomePage(Request $request)
    {
        // request
    	$id_number = $request->input('id-number');

    	$password = $request->input('password');

        //query to get the data who logged in

        $validate_intern_number = DB::table('intern_infos')->select('intern_num','intern_firstname','intern_lastname','intern_middlename','position')->where(['intern_num' => $id_number,'intern_password' => $password])->get();


        $validate_emp_num = DB::table('employee_infos')->select('emp_num','emp_firstname','emp_lastname','emp_middlename','position')->where(['emp_num' => $id_number,'emp_password' => $password])->get();

        $intern =  $validate_intern_number;

        $employee = $validate_emp_num;

        $dtr = new DailyTimeRecord;


        $check_user = DailyTimeRecord::where('employee_number', $id_number)->first();

        $time = Carbon::now();

        $get_date = DailyTimeRecord::select('Date')->first();

        $current_time = $time->toTimeString();

        // get the date format

        $current_date = $time->toFormattedDateString();

        $am_in = $time->setTime(9, 00, 00)->toTimeString();

        $late = $time->setTime(12,59,59)->toTimeString();

        $overtime = $time->diffForHumans();

        $logout = $time->setTime(18,00,00)->toTimeString();

        $midnight_cut = $time->setTime(23,59,59)->toTimeString();

        // if the user has no record

        if($check_user === null){

                // if the user who logged in is intern
            if(!$intern->isEmpty()){

                // log in for intern
                // morning in

                if($current_time < $am_in){

                    $dtr = array(

                        'Date' => $current_date,
                        'fullname' => $intern[0]->intern_firstname . $intern[0]->intern_middlename . $intern[0]->intern_lastname,

                        'employee_number' => $intern[0]->intern_num,
                        'am_in' => $current_time,
                        'position' => $intern[0]->position,
                    );

                    DailyTimeRecord::create($dtr);

                    return redirect('/')->with('dtr', $dtr);

                    // evening in

                }else if($current_time >= $midnight_cut){

                    $dtr = array(

                        'Date' => $current_date,
                        'fullname' => $intern[0]->intern_firstname . $intern[0]->intern_middlename . $intern[0]->intern_lastname,

                        'employee_number' => $intern[0]->intern_num,
                        'am_in' => $current_time,
                        'position' => $intern[0]->position,
                    );


                    DailyTimeRecord::create($dtr);

                    return redirect('/')->with('dtr', $dtr);

                    // overtime

                }else if($current_time > $logout){

                    $dtr = array(

                        'Date' => $current_date,
                        'fullname' => $intern[0]->intern_firstname . $intern[0]->intern_middlename . $intern[0]->intern_lastname,
                        'employee_number' => $intern[0]->intern_num,
                        'Overtime' => $current_time,
                        'position' => $intern[0]->position,
                    );


                    DailyTimeRecord::create($dtr);
                    
                    return redirect('/')->with('dtr', $dtr);

                    // late query

                }else if($current_time > $am_in && $current_time < $late){

                    $dtr = array(

                        'Date' => $current_date,
                        'fullname' => $intern[0]->intern_firstname . $intern[0]->intern_middlename . $intern[0]->intern_lastname,
                        'employee_number' => $intern[0]->intern_num,
                        'late' => $current_time,
                        'position' => $intern[0]->position,
                    );

                    DailyTimeRecord::create($dtr);

                    return redirect('/')->with('dtr', $dtr);

                    //halfday

                }else if($current_time > $late){

                    $dtr = array(

                        'Date' => $current_date,
                        'fullname' => $intern[0]->intern_firstname . $intern[0]->intern_middlename . $intern[0]->intern_lastname,

                        'employee_number' => $intern[0]->intern_num,
                        'halfday' => $current_time,
                        'position' => $intern[0]->position,
                    );


                    DailyTimeRecord::create($dtr);

                    return redirect('/')->with('dtr', $dtr);
                }

            }else if(!$employee->isEmpty()){

                // if the user who logged in is employee

                $time = Carbon::now();

                $current_time = $time->toTimeString();
                                        // get the date format
                $current_date = $time->toFormattedDateString();

                $am_in = $time->setTime(9, 00, 00)->toTimeString();

                $late = $time->setTime(12,59,59)->toTimeString();

                $overtime = $time->diffForHumans();

                $logout = $time->setTime(18,00,00)->toTimeString();

                $midnight_cut = $time->setTime(23,59,59)->toTimeString();

                // logging in of time for employee

                    // am in
                    if($current_time < $am_in){

                        $dtr = array(
                            'Date' => $current_date,
                            'fullname' => $employee[0]->emp_firstname . $employee[0]->emp_middlename . $employee[0]->emp_lastname,

                            'employee_number' => $employee[0]->emp_num,
                            'am_in' => $current_time,
                            'position' => $employee[0]->position,
                        );

                         DailyTimeRecord::create($dtr);

                         return redirect('/')->with('dtr', $dtr);

                         // overtime

                    }else if($current_time > $logout){

                         $dtr = array(

                            'Date' => $current_date,
                            'fullname' => $employee[0]->emp_firstname . $employee[0]->emp_middlename . $employee[0]->emp_lastname,

                            'employee_number' => $employee[0]->emp_num,
                            'Overtime' => $current_time,
                            'position' => $employee[0]->position,
                        );

                        DailyTimeRecord::create($dtr);

                        return redirect('/')->with('dtr', $dtr);
                         
                        //12 am in

                    }else if($current_time >= $midnight_cut){

                        $dtr = array(

                            'Date' => $current_date,
                            'fullname' => $employee[0]->emp_firstname . $employee[0]->emp_middlename . $employee[0]->emp_lastname,

                            'employee_number' => $employee[0]->emp_num,
                            'am_in' => $current_time,
                            'position' => $employee[0]->position,
                        );

                        DailyTimeRecord::create($dtr);

                        return redirect('/')->with('dtr', $dtr);

                        // late query

                    }else if($current_time > $am_in && $current_time < $late){

                        $dtr = array(

                            'Date' => $current_date,
                            'fullname' => $employee[0]->emp_firstname . $employee[0]->emp_middlename . $employee[0]->emp_lastname,

                            'employee_number' => $employee[0]->emp_num,
                            'late' => $current_time,
                            'position' => $employee[0]->position,
                        );

                    DailyTimeRecord::create($dtr);

                    return redirect('/')->with('dtr', $dtr);

                    // halfday

                    }else if($current_time > $late){

                        $dtr = array(

                            'Date' => $current_date,
                            'fullname' => $employee[0]->emp_firstname . $employee[0]->emp_middlename . $employee[0]->emp_lastname,

                            'employee_number' => $employee[0]->emp_num,
                            'halfday' => $current_time,
                            'position' => $employee[0]->position,
                        );


                        DailyTimeRecord::create($dtr);

                        return redirect('/')->with('dtr', $dtr);

                    }
                       
                // elseif isEmpty
            }else{

                return 'Invalid information';
            }
            
            // check user === null

        }else{

            return 'you have already logged in';

        }

    }// welcome function

    public function greetingPage()
    {
        return view('client.login');
    }


    public function goodbyePage(Request $request){

         // request
        $id_number = $request->input('id-number-logout');

        $password = $request->input('password-logout');

        //query to get the data who logged in

        $validate_intern_number = DB::table('intern_infos')->select('intern_num','intern_firstname','intern_lastname','intern_middlename','position')->where(['intern_num' => $id_number,'intern_password' => $password])->get();


        $validate_emp_num = DB::table('employee_infos')->select('emp_num','emp_firstname','emp_lastname','emp_middlename','position')->where(['emp_num' => $id_number,'emp_password' => $password])->get();

        $intern =  $validate_intern_number;

        $employee = $validate_emp_num;

        $dtr = DailyTimeRecord::select('id')->where('employee_number', $id_number)->first();

        if($dtr === null){


            return 'you need to login first';

        }else{


            $time = Carbon::now();

            $current_time = $time->toTimeString();
                                    // get the date format
            $current_date = $time->toFormattedDateString();

            $am_in = $time->setTime(9, 00, 00)->toTimeString();

            $twopm = $time->setTime(14,00,00)->toTimeString();

            $threepm = $time->setTime(15,00,00)->toTimeString();

            $fourpm = $time->setTime(16,00,00)->toTimeString();

            $fivepm = $time->setTime(17,00,00)->toTimeString();

            $sevenpm = $time->setTime(19,00,00)->toTimeString();

            $late = $time->setTime(12,59,59)->toTimeString();

            $overtime = $time->diffForHumans();

            $logout = $time->setTime(18,00,00)->toTimeString();

            $midnight_cut = $time->setTime(23,59,59)->toTimeString();

            // undertime

            if($current_time > $twopm && $current_time < $threepm){


                $dtr = array(

                    'halfday' => $current_time,
                );

                dd($dtr);

                DailyTimeRecord::create($dtr);

                return redirect('/')->with('dtr', $dtr);

                // regular logout

            }else if($current_time >= $logout && $current_time < $sevenpm){


                $dtr = array(

                    'logout' => $current_time,
                );


                dd($dtr);

                DailyTimeRecord::create($dtr);

                return redirect('/')->with('dtr', $dtr);

                // undertime

            }else if($current_time > $am_in && $current_time < $late){

                $dtr = array(

                    'undertime' => $current_time,
                );


                dd($dtr);

                DailyTimeRecord::create($dtr);

                return redirect('/')->with('dtr', $dtr);

            }
        }
       
    }

    public function logoutPage()
    {
        return view('client.logout');
    }
}