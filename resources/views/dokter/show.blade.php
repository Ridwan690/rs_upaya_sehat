@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-center mt-3">
        <div class="w-75">
            <div class="card shadow">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Detail Dokter</h5>
                    <a href="{{ route('dokter.index') }}" class="btn btn-primary">&larr; Back</a>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="dokter_id" class="col-sm-4 col-form-label text-end"><strong>Nama Dokter:</strong></label>
                        <div class="col-sm-6">
                            <p class="form-control-plaintext">{{ $dokter->nama }}</p>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="spesialis" class="col-sm-4 col-form-label text-end"><strong>Spesialis:</strong></label>
                        <div class="col-sm-6">
                            <p class="form-control-plaintext">{{ $dokter->spesialis }}</p>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="id_poli" class="col-sm-4 col-form-label text-end"><strong>Nama Poli:</strong></label>
                        <div class="col-sm-6">
                            <p class="form-control-plaintext">{{ $dokter->poli->nama_poli }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
