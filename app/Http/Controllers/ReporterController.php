<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Reporter;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ReporterController extends Controller
{
    public function index()
    {
        return view('reporter.index');
    }
    public function store(Request $request){
        // dd($request->all());
        $validatedData1 = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone_number' => 'required|numeric',
            'identity_type' => 'required',
            'identity_number' => 'required|numeric',
            'pob' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'evidences.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        

        Reporter::create($validatedData1);

        $validatedData2 = $request->validate([
            'report_title' => 'required|max:255',
            'body' => 'required',
        ]);

        $validatedData2['reporter_id'] = Reporter::latest()->first()->id;
        $validatedData2['title'] = $validatedData2['report_title'];
        $validatedData2['description'] = $validatedData2['body'];
        $validatedData2['tiket_id'] = 'T'.date('YmdHis');
        $validatedData2['status'] = 'Pending';

        // dd($validatedData);

        $report = Report::create($validatedData2);

        if ($request->hasFile('evidences')) {
            foreach ($request->file('evidences') as $evidence) {
                $report->addMedia($evidence)->toMediaCollection('evidences');
            }
        }

        return redirect('/')->with('success', 'New report has been added!');
    }
}
