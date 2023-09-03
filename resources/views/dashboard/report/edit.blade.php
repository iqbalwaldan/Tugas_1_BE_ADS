@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn btn-secondary mb-3" href="/dashboard/report" role="button">Batal</a>
            <div class="card">
                <div class="card-header h4 text-center fw-bold">Edit Status</div>

                <div class="card-body">
                    <form action="/dashboard/report/{{ $report->id }}" method="POST">
                        @method('PATCH')
                        @csrf
                        <h6 class="fw-bold">Nomor Tiket</h6>
                        <h6>{{ $report->tiket_id }}</h6><br>
                        <h6 class="fw-bold"></h6>
                        <h6>{{ $report->title }}</h6><br>
                        <div class="form-group">
                            <label for="status" class="form-label fw-bold">Status</label>
                            <select class="form-select" name="status">
                                <option value="Pending">Pending</option>
                                <option value="Proses Administratif">Proses Administratif</option>
                                <option value="Proses Penanganan">Proses Penanganan</option>
                                <option value="Selesai Ditangani">Selesai Ditangani</option>
                                <option value="Laporan Ditolak">Laporan Ditolak</option>
                            </select>
                        </div><br>
                        <div class="mb-3">
                            <label for="category_id" class="form-label fw-bold">Category</label>
                            <select class="form-select" name="category_id">
                                @foreach ($categories as $category)
                                    @if (old('category_id',$report->category_id) == $category->id)
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                    @else    
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="note" class="form-label fw-bold">Catatan</label>
                            <textarea id="note" type="text" class="form-control @error('note') is-invalid @enderror" name="note" value="{{ old('note') }}" required autocomplete="note" autofocus></textarea>
                            @error('note')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button class="btn btn-primary btn-user btn-block" type="submit">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
