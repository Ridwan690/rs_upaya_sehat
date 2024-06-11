@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-center mt-3">
        <div class="w-75">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Add New Jadwal</h5>
                    <a href="{{ route('jadwal.index') }}" class="btn btn-primary">
                        &larr; Back
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('jadwal.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="dokter_id" class="form-label">Nama Dokter</label>
                            <select class="form-select @error('dokter_id') is-invalid @enderror" id="dokter_id" name="dokter_id">
                                <option value="">-- Pilih Nama Dokter --</option>
                                @foreach ($dokter as $doctor)
                                    <option value="{{ $doctor->id }}">{{ $doctor->nama }}</option>
                                @endforeach
                            </select>
                            @error('dokter_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="poli_id" class="form-label">Nama Poli</label>
                            <select class="form-select @error('poli_id') is-invalid @enderror" id="poli_id" name="poli_id">
                                <option value="">-- Pilih Nama Poli --</option>
                                @foreach ($poli as $clinic)
                                    <option value="{{ $clinic->id }}">{{ $clinic->nama_poli }}</option>
                                @endforeach
                            </select>
                            @error('poli_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{ old('tanggal') }}">
                            @error('tanggal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="jam_mulai" class="form-label">Jam Mulai</label>
                            <input type="time" class="form-control @error('jam_mulai') is-invalid @enderror" id="jam_mulai" name="jam_mulai" value="{{ old('jam_mulai') }}">
                            @error('jam_mulai')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="jam_selesai" class="form-label">Jam Selesai</label>
                            <input type="time" class="form-control @error('jam_selesai') is-invalid @enderror" id="jam_selesai" name="jam_selesai" value="{{ old('jam_selesai') }}">
                            @error('jam_selesai')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-success">Add jadwal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
