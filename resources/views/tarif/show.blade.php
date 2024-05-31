@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-center mt-3">
        <div class="w-75">
            <div class="card shadow">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Detail Tarif</h5>
                    <a href="{{ route('tarif.index') }}" class="btn btn-primary">&larr; Back</a>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="nama_layanan" class="col-sm-4 col-form-label text-end"><strong>Nama Layanan:</strong></label>
                        <div class="col-sm-6">
                            <p class="form-control-plaintext">{{ $tarif->nama_layanan }}</p>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jenis_layanan" class="col-sm-4 col-form-label text-end"><strong>Jenis Layanan:</strong></label>
                        <div class="col-sm-6">
                            <p class="form-control-plaintext">{{ $tarif->jenis_layanan }}</p>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="biaya" class="col-sm-4 col-form-label text-end"><strong>Biaya:</strong></label>
                        <div class="col-sm-6">
                            <p class="form-control-plaintext">Rp {{ number_format($tarif->biaya, 0, ',', '.') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
