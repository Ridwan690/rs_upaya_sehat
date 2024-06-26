@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-center mt-3">
        <div class="w-75">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Add New Perawat</h5>
                    <a href="{{ route('perawat.index') }}" class="btn btn-primary">
                        &larr; Back
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('perawat.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Perawat</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" value="{{ old('jabatan') }}">
                            @error('jabatan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="id_poli" class="form-label">Nama Poli</label>
                            <select class="form-select @error('id_poli') is-invalid @enderror" id="id_poli" name="id_poli">
                                <option value="">-- Pilih Poli --</option>
                                @foreach ($poli as $clinic)
                                    <option value="{{ $clinic->id }}">{{ $clinic->nama_poli }}</option>
                                @endforeach
                            </select>
                            @error('id_poli')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-success">Add Perawat</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
