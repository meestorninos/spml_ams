<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeInfo extends Model
{
    protected $fillable = [

    	'emp_firstname',
    	'emp_lastname', 
    	'emp_nickname',
    	'emp_middlename',
    	'emp_department',
    	'emp_num',
        'emp_image',
    	'emp_password',
    	'position',
        'status',
    ];
    protected $table = 'employee_infos';

    protected $primaryKey = 'id';

    public function dtr_emp()
    {
        return $this->belongsTo('App\DailyTimeRecord','emp_num');
    }
}
