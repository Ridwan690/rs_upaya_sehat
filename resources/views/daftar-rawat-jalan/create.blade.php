@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-center mt-3">
        <div class="w-75">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Add New Daftar Rawat Jalan</h5>
                    <a href="{{ route('daftar-rawat-jalan.index') }}" class="btn btn-primary">
                        &larr; Back
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('daftar-rawat-jalan.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="rekam_medik_id" class="form-label">Pilih Pasien</label>
                            <select class="form-select @error('rekam_medik_id') is-invalid @enderror" id="rekam_medik_id" name="rekam_medik_id">
                                <option value="">-- Pilih Pasien --</option>
                                @foreach ($RekamMedik as $MedicalRecord)
                                    <option value="{{ $MedicalRecord->id }}">{{ $MedicalRecord->pasien->nama }}</option>
                                @endforeach
                            </select>
                            @error('rekam_medik_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="jadwal_id" class="form-label">Pilih Jadwal</label>
                            <select class="form-select @error('jadwal_id') is-invalid @enderror" id="jadwal_id" name="jadwal_id">
                                <option value="">-- Pilih Jadwal --</option>
                                @foreach ($jadwal as $schedule)
                                    <option value="{{ $schedule->id }}">{{ $schedule->dokter->nama }} - {{ $schedule->poli->nama_poli }} - {{ $schedule->tanggal }} - {{ $schedule->jam_mulai }}</option>
                                @endforeach
                            </select>
                            @error('jadwal_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-success">Add Daftar Rawat Jalan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
