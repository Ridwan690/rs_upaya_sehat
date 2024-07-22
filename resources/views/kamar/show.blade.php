@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-center mt-3">
        <div class="w-75">
            <div class="card shadow">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Detail Kamar</h5>
                    <a href="{{ route('kamar.index') }}" class="btn btn-primary">&larr; Back</a>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="kode_kamar" class="col-sm-4 col-form-label text-end"><strong>Kode Kamar:</strong></label>
                        <div class="col-sm-6">
                            <p class="form-control-plaintext">{{ $kamar->kode_kamar }}</p>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tipe_kamar" class="col-sm-4 col-form-label text-end"><strong>Tipe Kamar:</strong></label>
                        <div class="col-sm-6">
                            <p class="form-control-plaintext">{{ $kamar->tipe_kamar }}</p>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="kapasitas" class="col-sm-4 col-form-label text-end"><strong>Kapasitas Kamar:</strong></label>
                        <div class="col-sm-6">
                            <p class="form-control-plaintext">{{ $kamar->kapasitas }} ranjang</p>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="perawat_id" class="col-sm-4 col-form-label text-end"><strong>Perawat:</strong></label>
                        <div class="col-sm-6">
                            @foreach($kamar->perawat as $perawat)
                            <p class="form-control-plaintext">- {{ $perawat->nama }}<br></p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection