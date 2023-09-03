<?php

namespace App\Http\Controllers;

use App\Models\Report_tracker;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ReportTrackerController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $reports = Report_tracker::all();
            return DataTables::of($reports)
            ->addIndexColumn()
            ->make();
        }
        return view('dashboard.report_tracker.index');
    }
}
