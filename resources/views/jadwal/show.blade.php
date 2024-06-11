@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-center mt-3">
        <div class="w-75">
            <div class="card shadow">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Detail Jadwal</h5>
                    <a href="{{ route('jadwal.index') }}" class="btn btn-primary">&larr; Back</a>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="dokter_id" class="col-sm-4 col-form-label text-end"><strong>Nama Dokter:</strong></label>
                        <div class="col-sm-6">
                            <p class="form-control-plaintext">{{ $jadwal->dokter->nama }}</p>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="poli_id" class="col-sm-4 col-form-label text-end"><strong>Nama Poli:</strong></label>
                        <div class="col-sm-6">
                            <p class="form-control-plaintext">{{ $jadwal->poli->nama_poli }}</p>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tanggal" class="col-sm-4 col-form-label text-end"><strong>Tanggal:</strong></label>
                        <div class="col-sm-6">
                            <p class="form-control-plaintext">{{ $jadwal->tanggal }}</p>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jam_mulai" class="col-sm-4 col-form-label text-end"><strong>Jam Mulai:</strong></label>
                        <div class="col-sm-6">
                            <p class="form-control-plaintext">{{ $jadwal->jam_mulai }}</p>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jam_selesai" class="col-sm-4 col-form-label text-end"><strong>Jam Selesai:</strong></label>
                        <div class="col-sm-6">
                            <p class="form-control-plaintext">{{ $jadwal->jam_selesai }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
