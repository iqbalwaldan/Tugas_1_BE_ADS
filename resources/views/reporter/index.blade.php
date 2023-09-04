@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header h4 fw-bold text-center">Formulir Pelaporan</div>

                <div class="card-body">
                    <form action="/reporter" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name" class="form-label m-0 fw-bold">Nama</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="nama" autofocus required value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="form-label  m-0 fw-bold">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="phone_number" class="form-label  m-0 fw-bold">No Telefon</label>
                            <input type="tel" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" placeholder="081xxxxxxxxx"  required value="{{ old('phone_number') }}">
                            @error('phone_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="identity_type" class="form-label  m-0 fw-bold">Jenis Identitas</label>
                            <select class="form-select" name="identity_type">
                                        <option value="KTP" selected>KTP</option>
                                        <option value="SIM">SIM</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="identity_number" class="form-label  m-0 fw-bold">Nomor Identitas</label>
                            <input type="text" name="identity_number" class="form-control @error('identity_number') is-invalid @enderror" id="identity_number" placeholder="No Identitas"  required value="{{ old('identity_number') }}">
                            @error('identity_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="pob" class="form-label  m-0 fw-bold">Kota Kelahiran</label>
                            <input type="text" name="pob" class="form-control @error('pob') is-invalid @enderror" id="pob" placeholder="Kota Kelahiran"  required value="{{ old('pob') }}">
                            @error('pob')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="dob" class="form-label  m-0 fw-bold">Tanggal Lahir</label>
                            <input type="date" name="dob" class="form-control @error('dob') is-invalid @enderror" id="dob" placeholder="Tanngal Lahir"  required value="{{ old('dob') }}">
                            @error('dob')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="address" class="form-label  m-0 fw-bold">Alamat</label>
                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Alamat"  required value="{{ old('address') }}">
                            @error('address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="report_title" class="form-label  m-0 fw-bold">Judul Laporan</label>
                            <input type="text" name="report_title" class="form-control @error('report_title') is-invalid @enderror" id="report_title" placeholder="Judul Laporan"  required value="{{ old('report_title') }}">
                            @error('report_title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="body" class="form-label  m-0 fw-bold">Laporan</label>
                            <input type="text" name="body" class="form-control @error('body') is-invalid @enderror" id="body" placeholder="Isi Laporan"  required value="{{ old('body') }}">
                            @error('body')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="evidences" class="form-label">Upload Bukti Laporan</label>
                            <input class="form-control" type="file" id="evidences" name="evidences[]" multiple>
                        </div>
                        <button class="btn btn-primary btn-user btn-block" type="submit">Kirim Laporan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
