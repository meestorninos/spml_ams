<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InternInfo;
use App\EmployeeInfo;

class EmpActController extends Controller
{
    public function index()
    {
        $employee = EmployeeInfo::all();
        return view('admin/employeeactive',compact('employee'));
    }
}
