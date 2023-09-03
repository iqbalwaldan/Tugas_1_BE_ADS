@extends('dashboard.layouts.main')

@section('container')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="col-md-10">
            <div class="p-4">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Edit Data Report</h1>
                </div>
                <form action="/dashboard/report/{{ $report->id }}" method="POST">
                    @method('PATCH')
                    @csrf
                    <h5><strong>Nomor Tiket</strong></h5>
                    <h6>{{ $report->tiket_id }}</h6><br>
                    <h5><strong>Judul Report</strong></h5>
                    <h6>{{ $report->title }}</h6><br>
                    <div class="form-group">
                        <label for="status" class="form-label">Status</label>
                        <select class="custom-select" name="status">
                            <option value="Pending">Pending</option>
                            <option value="Proses Administratif">Proses Administratif</option>
                            <option value="Proses Penanganan">Proses Penanganan</option>
                            <option value="Selesai Ditangani">Selesai Ditangani</option>
                            <option value="Laporan Ditolak">Laporan Ditolak</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Category</label>
                        <select class="custom-select" name="category_id">
                            @foreach ($categories as $category)
                                @if (old('category_id',$report->category_id) == $category->id)
                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                @else    
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-primary btn-user btn-block" type="submit">Simpan Perubahan</button>
                    <hr>
                </form>
            </div>
        </div>
    </div>
@endsection