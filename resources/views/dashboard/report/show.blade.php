@extends('dashboard.layouts.main')

@section('container')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="col-md-10">
            <div class="p-4">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Data Report {{ $report->tiket_id }}</h1>
                </div>
                <h5><strong>Nomor Tiket</strong></h5>
                <h6>{{ $report->tiket_id }}</h6><br>
                <h5><strong>Status</strong></h5>
                <h6>{{ $report->status }}</h6><br>
                <h5><strong>Categori</strong></h5>
                <h6>{{ $report->category->name }}</h6><br>
                <h5><strong>Judul Report</strong></h5>
                <h6>{{ $report->title }}</h6><br>
                <h5><strong>Deskripsi</strong></h5>
                <h6>{!! $report->description !!}</h6><br>
            </div>
        </div>
    </div>
@endsection