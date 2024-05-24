@extends('layouts.master')

@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Detail Pasien
                    </div>
                    <div class="float-end">
                        <a href="{{ route('pasien.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>Nama:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $pasien->nama }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Tempat Lahir:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $pasien->tempat_lahir }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Tanggal Lahir:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $pasien->tanggal_lahir }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Jenis Kelamin:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $pasien->jenis_kelamin }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Alamat:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $pasien->alamat }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Pendidikan:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $pasien->pendidikan }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Agama:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $pasien->agama }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Pekerjaan:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $pasien->pekerjaan }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Status:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $pasien->status }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>No Telepon:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $pasien->no_telepon }}
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
 
@endsection