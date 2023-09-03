<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Report;
use App\Models\Report_tracker;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $report = Report::all();
            return DataTables::of($report)
            ->addIndexColumn()
            ->addColumn('category', function ($report) {
                if ($report->category == null) {
                    return 'No Category';
                }else{
                    return $report->category->name;
                }
            })
            ->addColumn('action', function ($report) {
                $button ='
                    <a href="/dashboard/report/'.$report->id.'" class="btn btn-info">Show</a>
                    <a href="/dashboard/report/'.$report->id.'/edit" class="btn btn-warning">Edit</a>
                ';
                return $button;
            })
            ->make();
        }
        return view('dashboard.report.index');
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        return view('dashboard.report.show',[
            'report' => $report,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        return view('dashboard.report.edit',[
            'report' => $report,
            "categories" => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Report $report)
    {
        $report = Report::findOrFail($report->id);

        $report -> update($request->all());
        
        $data = [
                'user_id' => auth()->user()->id,
                'report_id' => $report->id,
                'status' => $report->status,
                'note'  => $request->note,
            ];
    
        Report_tracker::create($data);


        return redirect('/dashboard/report')->with('success', 'Report has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        //
    }
}
