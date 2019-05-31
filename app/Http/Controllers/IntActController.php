<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmployeeInfo;
use App\InternInfo;
use App\DailyTimeRecord;
use App\User;

class IntActController extends Controller
{
    public function index()
    {
        $user = InternInfo::all();
        return view('admin.internactive',compact('user'));
    }
}
