<?php

use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

use App\DailyTimeRecord;

use App\User;

use App\EmployeeInfo;
use App\InternInfo;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();



// Route::get('/time', function(){

	// $time = new Carbon();

	// echo $time;

	// echo "<br>";

	// echo $time->today();

	// echo "<br>";

	// echo $time->diffForHumans();
	
	//  echo "<br>";

	// $newyear = new Carbon('First day of april 2019');

	// echo $newyear->diffForHumans();
	
	// echo "<br>";

	// echo $newyear->year;

	// echo "<br>";

	//how to get the date
	// echo $newyear->toDayDateTimeString();


	// how to get the time
	// echo $newyear->format('h:i:s A');
// });

// Route::get('/welcome', 'Welcome@index')->name('welcome');



Route::prefix('admin')->group(function(){

	Route::get('/', 'HomeController@index')->name('admin/dashboard');
	
	Route::get('employeeactive', 'EmpActController@index')->name('admin/employeeactive');

	Route::get('employeearchive', 'EmpArcController@index')->name('admin/employeearchive');

	Route::get('internarchive', 'IntArcController@index')->name('admin/internarchive');

	Route::get('internactive', 'IntActController@index')->name('admin/internactive');

	// create Intern
	Route::get('addIntern', 'AddInternController@index')->name('admin/intern');
	Route::post('addIntern','AddInternController@create')->name('create-intern');
	Route::get('intern-dtr','AddInternController@interndtr')->name('intern-dtr');
	Route::post('checkinterndtr','AddInternController@checkinterndtr')->name('checkinterndtr');
	Route::get('interncsv','AddInternController@export')->name('interncsv');
	Route::get('intern-info','AddInternController@showInfo')->name('intern-info');

	// edit

	Route::get('edit-intern', 'AddInternController@editDTR')->name('edit-intern-dtr');

	//create Employee
	Route::get('addemp', 'AddEmpController@employeeForm')->name('admin/addemp');
	Route::post('addemp','AddEmpController@create')->name('create-emp');
	Route::get('employee-dtr','AddEmpController@employeedtr')->name('employee-dtr');
	Route::post('checkempdtr','AddEmpController@checkempdtr')->name('checkempdtr');

	Route::get('back', 'AddEmpController@back')->name('back');
	Route::get('logout', 'Auth\LoginController@logout')->name('logout');

});

Route::get('/', 'DailyTimeRecordController@loginForm')->name('welcome');


Route::get('greetingPage','DailyTimeRecordController@greetingPage')->name('greeting-page');

Route::post('dtr','DailyTimeRecordController@welcomePage')->name('client-login');

Route::post('out', 'DailyTimeRecordController@outPage')->name('client-logout');

// SAMPLE
Route::get('sample', function(){

	$time = Carbon::now();

	$c = $time->toTimeString();

	$am_in = $time->setTime(9, 00, 00)->toTimeString();

    $pm_out = $time->setTime(18,00,00)->toTimeString();

    $am_out = $time->setTime(11, 59, 59)->toTimeString();

	$pm_in = $time->setTime(12,00,00)->toTimeString();
	
	$pm_late = $time->setTime(14,01,00)->toTimeString();

	// $current_time = $time->format('G:i');

    $currentDate = $time->toFormattedDateString();

    $diff = $time->diffForHumans();

	$emp = EmployeeInfo::count();
	
	$int = InternInfo::count();
	
	$cd = $time->format('Y-m-d');


    $get = InternInfo::select('intern_num')->get();

    $get_date = DailyTimeRecord::select('Date')->where('Date', '!=', $currentDate)->get();

    $dtr = DailyTimeRecord::count();

    $stat = DailyTimeRecord::select('status','employee_number','fullname','Date')->where('Date', $currentDate)->get();

	$emp = 'EMPLOYEE';

	$int = 'INTERN';

	$employee = DailyTimeRecord::select('position')->where('position','=', $emp)->count();

	$intern = DailyTimeRecord::select('position')->where('position','=', $int)->count();

	$present = DailyTimeRecord::select('Date')->where('Date', $cd)->count();

	$check_user = DailyTimeRecord::select('employee_number','Date')->where('Date',$currentDate)->first();

	$get_present = DailyTimeRecord::select('position')->where('Date', $currentDate)->count();

	$get = DailyTimeRecord::all();
	
	$usr = User::all();

	$in = InternInfo::all();

	$ar1 = [1,2];

	$ar2 = [3,4];

	// $result = $ar1[1] * $ar2[0];

	// return $result;

	$a = 'abc';

	$res = strlen($a);

	// return 'you have' .  ' ' . $res . ' ' . 'letters in your variable';

	$s = DailyTimeRecord::select('fullname')->where('fullname','LIKE','w%')->get();

	return $s;
	
	// if($get !== null){

	// 	return 'the field is not empty';

	// }else{

	// 	return 'the field is empty';
	// }

	// return $employee;

	// return $present;

	// return $intern;

	return $get;

	// return $get_present;

	// return $in;

	// return $c;
	
	// return $usr;
    

    // if($stat === null){

    // 	return 'no date matches';

    // }else{

    // 	return $stat;
    // }

   // $check = DailyTimeRecord::all();

   // return $c;

   
    // return $get;

    // return $emp;

    // return '<br>';

    // return $int;

    // return '<br>';

    // return $count;

    // return $currentDate;

    // dd($currentDate);

    // if($currentDate != $get_date){

    // 	return 'true';

    // }else{

    // 	return 'false';

    // }

    // return $get_date;

});
