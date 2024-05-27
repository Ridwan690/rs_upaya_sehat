@extends('layouts.master')

@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Detail Tarif
                    </div>
                    <div class="float-end">
                        <a href="{{ route('tarif.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>Nama Layanan:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $tarif->nama_layanan }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>Jenis Layanan:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $tarif->jenis_layanan }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>Biaya:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            Rp {{ number_format($tarif->biaya, 0, ',', '.') }}
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
 
@endsection