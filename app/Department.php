<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';

    protected $fillable = [
        'department'
    ];

    public function departmentEmp(){

    	return $this->hasMany('App\EmployeeInfo','emp_num');
    }

    public function departmentInt(){

    	return $this->hasMany('App\InternInfo','intern_num');
    }
}
