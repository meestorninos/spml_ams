<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InternInfo;
use App\EmployeeInfo;
use App\DailyTimeRecord;
use Illuminate\Support\Facades\DB;

class IntArcController extends Controller
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
        $sho = InternInfo::onlyTrashed()->get();
        return view('admin.internarchive',compact('sho'));
        
    }

    public function softDelete($key){

        $del = InternInfo::where('intern_id',$key);
        $del->delete();
        return redirect('admin/internactive');
    }
}
