@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h5 class="mb-0">Detail Pasien</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="no_rm" class="col-sm-3 col-form-label"><strong>Nomor Rekam Medis:</strong></label>
                        <div class="col-sm-9">
                            {{ $pasien->rekammedik->no_rekam_medik }}
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nik" class="col-sm-3 col-form-label"><strong>NIK:</strong></label>
                        <div class="col-sm-9">
                            {{ $pasien->nik }}
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-3 col-form-label"><strong>Nama:</strong></label>
                        <div class="col-sm-9">
                            {{ $pasien->nama }}
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tempat_lahir" class="col-sm-3 col-form-label"><strong>Tempat Lahir:</strong></label>
                        <div class="col-sm-9">
                            {{ $pasien->tempat_lahir }}
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tanggal_lahir" class="col-sm-3 col-form-label"><strong>Tanggal Lahir:</strong></label>
                        <div class="col-sm-9">
                            {{ $pasien->tanggal_lahir }}
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jenis_kelamin" class="col-sm-3 col-form-label"><strong>Jenis Kelamin:</strong></label>
                        <div class="col-sm-9">
                            {{ $pasien->jenis_kelamin }}
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-3 col-form-label"><strong>Alamat:</strong></label>
                        <div class="col-sm-9">
                            {{ $pasien->alamat }}
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pendidikan" class="col-sm-3 col-form-label"><strong>Pendidikan:</strong></label>
                        <div class="col-sm-9">
                            {{ $pasien->pendidikan }}
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="agama" class="col-sm-3 col-form-label"><strong>Agama:</strong></label>
                        <div class="col-sm-9">
                            {{ $pasien->agama }}
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pekerjaan" class="col-sm-3 col-form-label"><strong>Pekerjaan:</strong></label>
                        <div class="col-sm-9">
                            {{ $pasien->pekerjaan }}
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="status" class="col-sm-3 col-form-label"><strong>Status:</strong></label>
                        <div class="col-sm-9">
                            {{ $pasien->status }}
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="no_telepon" class="col-sm-3 col-form-label"><strong>No Telepon:</strong></label>
                        <div class="col-sm-9">
                            {{ $pasien->no_telepon }}
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <a href="{{ route('pasien.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
