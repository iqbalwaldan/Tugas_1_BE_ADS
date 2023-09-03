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
        // return view('dashboard.report.index', [
        //     'reports' => Report::latest()->get()    
        // ]);
        if (request()->ajax()) {
            $reports = Report::all();
            return DataTables::of($reports)
            ->addIndexColumn()
            ->addColumn('action', function ($report) {
                $button ='
                <td>
                      <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info">Show</a>
                      <a href="/dashboard/report/'.$report->id.'/edit" class="badge bg-warning">Edit</a>
                      <form action="/dashboard/posts/{{ $post->slug }}" method="DELETE" class="d-inline">
                        <button class="badge bg-danger border-0" onclick="return confirm("Are you sure?")">
                          Delate
                        </button>
                      </form>
                  </td>
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
        //
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
        
        $validatedData1 = [
            'user_id' => auth()->user()->id,
            'report_id' => $report->id,
            'status' => $report->status,
            'note'  => 'update status to '.$report->status,
        ];

        Report_tracker::create($validatedData1);

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
