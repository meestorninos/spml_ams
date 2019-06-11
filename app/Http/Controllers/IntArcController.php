<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InternInfo;
use App\EmployeeInfo;
use App\DailyTimeRecord;

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
        return view('admin.internarchive');
    }

    public function softDelete($id){

        $id = Contents::find( $id );
        $id ->delete();

        return redirect()->back()->with('id');
    }
}
