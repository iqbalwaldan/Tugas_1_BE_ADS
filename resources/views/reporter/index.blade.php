@extends('layouts.main')

@section('container')
    <div class="container min-vh-100 d-flex align-items-center justify-content-center my-5">
        <div class="card-body p-0 bg-white rounded col-md-9">
            <!-- Nested Row within Card Body -->
            <div class="d-flex justify-content-center" >
                <div class="col-md-10">
                    <div class="p-4">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Form Pengisian Report</h1>
                        </div>
                        <form action="/report" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="nama" autofocus required value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone_number" class="form-label">No Telefon</label>
                                <input type="tel" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" placeholder="081xxxxxxxxx"  required value="{{ old('phone_number') }}">
                                @error('phone_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- <label for="identity_type1" class="form-label">Jenis Identitas</label>
                            <div class="d-flex ml-2">
                                <div class="form-check mr-2">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="identity_type1">
                                    <label class="form-check-label" for="identity_type1">
                                        KTP
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="identity_type2" checked>
                                    <label class="form-check-label" for="identity_type2">
                                        SIM
                                    </label>
                                </div>
                            </div> --}}
                            <div class="form-group">
                                <label for="identity_type" class="form-label">Jenis Identitas</label>
                                <select class="custom-select" name="identity_type">
                                            <option value="KTP" selected>KTP</option>
                                            <option value="SIM">SIM</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="identity_number" class="form-label">Nomor Identitas</label>
                                <input type="text" name="identity_number" class="form-control @error('identity_number') is-invalid @enderror" id="identity_number" placeholder="No Identitas"  required value="{{ old('identity_number') }}">
                                @error('identity_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pob" class="form-label">Kota Kelahiran</label>
                                <input type="text" name="pob" class="form-control @error('pob') is-invalid @enderror" id="pob" placeholder="Kota Kelahiran"  required value="{{ old('pob') }}">
                                @error('pob')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="dob" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="dob" class="form-control @error('dob') is-invalid @enderror" id="dob" placeholder="Tanngal Lahir"  required value="{{ old('dob') }}">
                                @error('dob')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="address" class="form-label">Alamat</label>
                                <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Alamat"  required value="{{ old('address') }}">
                                @error('address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="report_title" class="form-label">Judul Laporan</label>
                                <input type="text" name="report_title" class="form-control @error('report_title') is-invalid @enderror" id="report_title" placeholder="Judul Laporan"  required value="{{ old('report_title') }}">
                                @error('report_title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                @error('report')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <label for="report" class="form-label">Body</label>
                                <input id="report" type="hidden" name="report" value="{{ old('report') }}">
                                <trix-editor input="report"></trix-editor>
                            </div>
                            <button class="btn btn-primary btn-user btn-block" type="submit">Login</button>
                            <hr>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');
            
            imgPreview.style.display = 'block';

            const oFReader = new FileReader();

            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection