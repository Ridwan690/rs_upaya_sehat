@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-center mt-3">
        <div class="w-75">
            <div class="card shadow">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Detail Obat</h5>
                    <a href="{{ route('obat.index') }}" class="btn btn-primary">&larr; Back</a>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="kode_obat" class="col-sm-4 col-form-label text-end"><strong>Kode obat:</strong></label>
                        <div class="col-sm-6">
                            <p class="form-control-plaintext">{{ $obat->kode_obat }}</p>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama_obat" class="col-sm-4 col-form-label text-end"><strong>Nama obat:</strong></label>
                        <div class="col-sm-6">
                            <p class="form-control-plaintext">{{ $obat->nama_obat }}</p>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="harga" class="col-sm-4 col-form-label text-end"><strong>Harga:</strong></label>
                        <div class="col-sm-6">
                            <p class="form-control-plaintext">Rp {{ number_format($obat->harga, 0, ',', '.') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
