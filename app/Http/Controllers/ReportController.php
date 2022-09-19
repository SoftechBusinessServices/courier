<?php

namespace App\Http\Controllers;

use App\Models\ParcelRegistration;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller

{
    public function index()
    {
        return view('admin-panel.reports.report');
    }

    public function dailyReport(Request $request)
    {
        $start_date = Carbon::parse($request->start_date)
                            ->toDateTimeString();

        $end_date = Carbon::parse($request->end_date)
                            ->toDateTimeString();

        $users = ParcelRegistration::whereBetween('created_at',[$start_date,$end_date])->get();

        return view('admin-panel.reports.fetch_report',compact('users'));

    }
}
