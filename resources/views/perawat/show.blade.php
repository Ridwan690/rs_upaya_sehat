@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-center mt-3">
        <div class="w-75">
            <div class="card shadow">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Detail Perawat</h5>
                    <a href="{{ route('perawat.index') }}" class="btn btn-primary">&larr; Back</a>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="perawat_id" class="col-sm-4 col-form-label text-end"><strong>Nama Perawat:</strong></label>
                        <div class="col-sm-6">
                            <p class="form-control-plaintext">{{ $perawat->nama }}</p>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jabatan" class="col-sm-4 col-form-label text-end"><strong>Jabatan:</strong></label>
                        <div class="col-sm-6">
                            <p class="form-control-plaintext">{{ $perawat->jabatan }}</p>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="id_poli" class="col-sm-4 col-form-label text-end"><strong>Nama Poli:</strong></label>
                        <div class="col-sm-6">
                            <p class="form-control-plaintext">{{ $perawat->poli->nama_poli }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
