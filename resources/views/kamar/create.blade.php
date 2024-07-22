@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-center mt-3">
        <div class="w-75">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Add New Kamar</h5>
                    <a href="{{ route('kamar.index') }}" class="btn btn-primary">
                        &larr; Back
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('kamar.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="kode_kamar" class="form-label">Kode Kamar</label>
                            <input type="text" class="form-control @error('kode_kamar') is-invalid @enderror" id="kode_kamar" name="kode_kamar" value="{{ old('kode_kamar') }}">
                            @error('kode_kamar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tipe_kamar" class="form-label">Tipe Kamar</label>
                            <select class="form-select @error('tipe_kamar') is-invalid @enderror" id="tipe_kamar" name="tipe_kamar">
                                <option value="">-- Pilih Tipe Kamar --</option>
                                <option value="VIP" {{ old('tipe_kamar') == 'VIP' ? 'selected' : '' }}>VIP</option>
                                <option value="Kelas 1" {{ old('tipe_kamar') == 'Kelas 1' ? 'selected' : '' }}>Kelas 1</option>
                                <option value="Kelas 2" {{ old('tipe_kamar') == 'Kelas 2' ? 'selected' : '' }}>Kelas 2</option>
                                <option value="Kelas 3" {{ old('tipe_kamar') == 'Kelas 3' ? 'selected' : '' }}>Kelas 3</option>
                            </select>
                            @error('tipe_kamar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-success">Add Kamar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
