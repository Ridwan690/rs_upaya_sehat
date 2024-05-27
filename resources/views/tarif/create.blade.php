@extends('layouts.master')

@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Add New Tarif
                    </div>
                    <div class="float-end">
                        <a href="{{ route('tarif.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('tarif.store') }}" method="post">
                        @csrf
                        <div class="mb-3 row">
                        <label for="nama_layanan" class="col-md-4 col-form-label text-md-end text-start">Nama Layanan</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('nama_layanan') is-invalid @enderror" id="nama_layanan" name="nama_layanan" value="{{ old('nama_layanan') }}">
                                @if ($errors->has('nama_layanan'))
                                    <span class="text-danger">{{ $errors->first('nama_layanan') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jenis_layanan" class="col-md-4 col-form-label text-md-end text-start">Jenis Layanan</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('jenis_layanan') is-invalid @enderror" id="jenis_layanan" name="jenis_layanan" value="{{ old('jenis_layanan') }}">
                                @if ($errors->has('jenis_layanan'))
                                    <span class="text-danger">{{ $errors->first('jenis_layanan') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="biaya" class="col-md-4 col-form-label text-md-end text-start">Biaya</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="tel" class="form-control @error('biaya') is-invalid @enderror" id="biaya" name="biaya" value="{{ old('biaya') }}">
                                </div>
                                @if ($errors->has('biaya'))
                                    <span class="text-danger">{{ $errors->first('biaya') }}</span>
                                @endif
                            </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add tarif">
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>

@endsection