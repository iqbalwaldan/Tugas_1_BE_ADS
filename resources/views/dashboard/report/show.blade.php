@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn btn-secondary mb-3" href="/dashboard/report" role="button">Kembali</a>
            <div class="card">

                <div class="card-header text-center h4"><strong>Data Report</strong></div>

                <div class="card-body">
                    <h6><strong>Nomor Tiket</strong></h6>
                    <h6>{{ $report->tiket_id }}</h6><br>
                    <h6><strong>Status</strong></h6>
                    <h6>{{ $report->status }}</h6><br>
                    <h6><strong>Categori</strong></h6>
                    <h6>{{ $report->category->name }}</h6><br>
                    <h6><strong>Judul Report</strong></h6>
                    <h6>{{ $report->title }}</h6><br>
                    <h6><strong>Deskripsi</strong></h6>
                    <h6>{!! $report->description !!}</h6><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
