<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InternInfo;
use App\EmployeeInfo;
use App\DailyTimeRecord;

use Illuminate\Support\Facades\DB;

class EmpArcController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sho = EmployeeInfo::onlyTrashed()->get();
        return view('admin/employeearchive',compact('sho'));
    }
    public function emp_delete($key){

        $del = EmployeeInfo::where('emp_id',$key);
        $del->delete();
        return redirect('admin/employeeactive');

    }
}
