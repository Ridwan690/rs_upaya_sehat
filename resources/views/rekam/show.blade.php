@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h5 class="mb-0">Detail Rekam Medik</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="no_rm" class="col-sm-3 col-form-label"><strong>Nomor Rekam Medis:</strong></label>
                        <div class="col-sm-9">
                            <p class="form-control-plaintext">{{ $rekamMedik->no_rekam_medik }}</p>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nik" class="col-sm-3 col-form-label"><strong>NIK:</strong></label>
                        <div class="col-sm-9">
                            <p class="form-control-plaintext">{{ $rekamMedik->pasien->nik }}</p>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama_pasien" class="col-sm-3 col-form-label"><strong>Nama Pasien:</strong></label>
                        <div class="col-sm-9">
                            <p class="form-control-plaintext">{{ $rekamMedik->pasien->nama }}</p>
                        </div>
                    </div>
                    <hr>
                    <h5>Detail Kunjungan</h5>
                    @foreach ($rekamMedik->kunjungan as $kunjungan)
                        <div class="mb-3 row">
                            <label for="nik" class="col-sm-3 col-form-label"><strong>Tanggal:</strong></label>
                            <div class="col-sm-9">
                                <p class="form-control-plaintext">{{ $kunjungan->tanggal }}</p>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nik" class="col-sm-3 col-form-label"><strong>Poli:</strong></label>
                            <div class="col-sm-9">
                                <p class="form-control-plaintext">{{ $kunjungan->poli->nama_poli }}</p>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nik" class="col-sm-3 col-form-label"><strong>Dokter:</strong></label>
                            <div class="col-sm-9">
                                <p class="form-control-plaintext">{{ $kunjungan->dokter->nama }}</p>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nik" class="col-sm-3 col-form-label"><strong>Diagnosa:</strong></label>
                            <div class="col-sm-9">
                                <p class="form-control-plaintext">{{ $kunjungan->diagnosa }}</p>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nik" class="col-sm-3 col-form-label"><strong>Tindakan:</strong></label>
                            <div class="col-sm-9">
                                <p class="form-control-plaintext">{{ $kunjungan->tindakan }}</p>
                            </div>
                        </div>
                        <a href="{{ route('rekam.edit', $kunjungan->id) }}" class="btn btn-primary btn-sm mx-1"><i class="fas fa-pencil-alt"></i></a> 
                        <hr>
                    @endforeach
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <a href="{{ route('rekam.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
