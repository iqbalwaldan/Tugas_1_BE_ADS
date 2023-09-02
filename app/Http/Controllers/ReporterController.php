<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Reporter;
use Illuminate\Http\Request;

class ReporterController extends Controller
{
    public function index()
    {
        return view('reporter.index');
    }
    public function store(Request $request){
        $validatedData1 = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone_number' => 'required|numeric',
            'identity_type' => 'required',
            'identity_number' => 'required|numeric',
            'pob' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'report_title' => 'required|max:255',
            'report' => 'required',
        ]);
        Reporter::create($validatedData1);

        $validatedData2 = $request->validate([
            'report_title' => 'required|max:255',
            'report' => 'required',
        ]);

        $validatedData2['reporter_id'] = Reporter::latest()->first()->id;
        $validatedData2['title'] = $validatedData1['report_title'];
        $validatedData2['description'] = $validatedData1['report'];
        $validatedData2['tiket_id'] = 'T'.date('YmdHis');
        $validatedData2['status'] = 'Pending';

        // dd($validatedData);

        Report::create($validatedData2);

        return redirect('/report')->with('success', 'New report has been added!');
    }
}
