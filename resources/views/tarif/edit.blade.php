@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-center mt-3">
        <div class="w-75">
            @if ($message = Session::get('success'))
                <div class="alert alert-success mb-4">
                    {{ $message }}
                </div>
            @endif

            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Edit Tarif</h5>
                    <a href="{{ route('tarif.index') }}" class="btn btn-primary">
                        &larr; Back
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('tarif.update', $tarif->id) }}" method="post">
                        @csrf
                        @method("PUT")
                        <div class="mb-3">
                            <label for="nama_layanan" class="form-label">Nama Layanan</label>
                            <input type="text" class="form-control @error('nama_layanan') is-invalid @enderror" id="nama_layanan" name="nama_layanan" value="{{ $tarif->nama_layanan }}">
                            @if ($errors->has('nama_layanan'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('nama_layanan') }}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="jenis_layanan" class="form-label">Jenis Layanan</label>
                            <input type="text" class="form-control @error('jenis_layanan') is-invalid @enderror" id="jenis_layanan" name="jenis_layanan" value="{{ $tarif->jenis_layanan }}">
                            @if ($errors->has('jenis_layanan'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('jenis_layanan') }}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="biaya" class="form-label">Biaya</label>
                            <input type="tel" class="form-control @error('biaya') is-invalid @enderror" id="biaya" name="biaya" value="{{ $tarif->biaya }}">
                            @if ($errors->has('biaya'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('biaya') }}
                                </div>
                            @endif
                        </div>
                        <div class="d-flex justify-content-end">
                            <input type="submit" class="btn btn-success" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
