<?php

namespace App\Exports;

use App\DailyTimeRecord;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DTRExport implements FromView
{
    public function view(): View
    {	
    	$oi = "INTERN";
        $ei = "EMPLOYEE";
        $start = Request('start');
        $end = Request('end');
        $che_st = Carbon::parse($start)->format('Y-m-d');
        $che_en = Carbon::parse($end)->format('Y-m-d');
        $check_daterange = DB::table('daily_time_records')->select('fullname','employee_number','position','am_in','am_out','pm_in','pm_out','ot_in','ot_out','Date','late','undertime','total')->where('position',$oi)->whereBetween('Date',[$che_st,$che_en])->get();
        $check_daterange2 = DailyTimeRecord::all();
        $time = Carbon::now();
        $current_time2 = $time->toTimeString();
        $current_date3 = $time->toFormattedDateString();
        $am_in = $time->setTime(9, 00)->toTimeString();
        $halfday = $time->setTime(13,00)->toTimeString();
        $carbon = new Carbon;
        return view('admin.intern-dtr.interncsv',compact('check_daterange'));
    }
}