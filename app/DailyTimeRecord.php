<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class DailyTimeRecord extends Model
{

    protected $table = 'daily_time_records';

    public function internInfo()
    {

    	return $this->hasMany('App\InternInfo','intern_num');

    }

    public function employeeInfo()
    {

    	return $this->hasMany('App\EmployeeInfo','emp_num');
    }

    protected $fillable = [
        'fullname', 'employee_number','status','position', 'am_in','logout','Date','late','undertime','ot_in','halfday',
    ];

}
