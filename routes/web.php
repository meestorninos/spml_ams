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

		//view
	Route::get('employee-record', 'ViewRecordController@employeeRecord')->name('view-employee-record');

	Route::get('intern-record', 'ViewRecordController@internRecord')->name('view-int-record');

	// daily attendance

	Route::get('daily-attendance','ViewRecordController@dailyAttendance')->name('daily-attendance');

});

Route::get('/', 'DailyTimeRecordController@loginForm')->name('welcome');


Route::get('greetingPage','DailyTimeRecordController@greetingPage')->name('greeting-page');

Route::post('dtr','DailyTimeRecordController@welcomePage')->name('client-login');

Route::post('out', 'DailyTimeRecordController@outPage')->name('client-logout');
