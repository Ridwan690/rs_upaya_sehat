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
                    <h5 class="mb-0">Edit Jadwal</h5>
                    <a href="{{ route('jadwal.index') }}" class="btn btn-primary">
                        &larr; Back
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('jadwal.update', $jadwal->id) }}" method="post">
                        @csrf
                        @method("PUT")
                        <div class="mb-3">
                            <label for="dokter_id" class="form-label">Nama Dokter</label>
                            <select class="form-select @error('dokter_id') is-invalid @enderror" id="dokter_id" name="dokter_id">
                                @foreach($dokter as $doctor)
                                    <option value="{{ $doctor->id }}" {{ $jadwal->doctor_id == $doctor->id ? 'selected' : '' }}>
                                        {{ $doctor->nama }}
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('dokter_id'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('dokter_id') }}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="poli_id" class="form-label">Nama Poli</label>
                            <select class="form-select @error('poli_id') is-invalid @enderror" id="poli_id" name="poli_id">
                                @foreach($poli as $clinic)
                                    <option value="{{ $clinic->id }}" {{ $jadwal->clinic_id == $clinic->id ? 'selected' : '' }}>
                                        {{ $clinic->nama_poli }}
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('poli_id'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('poli_id') }}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{ $jadwal->tanggal }}">
                            @if ($errors->has('tanggal'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('tanggal') }}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="jam_mulai" class="form-label">Jam Mulai</label>
                            <input type="time" class="form-control @error('jam_mulai') is-invalid @enderror" id="jam_mulai" name="jam_mulai" value="{{ $jadwal->jam_mulai }}">
                            @if ($errors->has('jam_mulai'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('jam_mulai') }}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="jam_selesai" class="form-label">Jam Selesai</label>
                            <input type="time" class="form-control @error('jam_selesai') is-invalid @enderror" id="jam_selesai" name="jam_selesai" value="{{ $jadwal->jam_selesai }}">
                            @if ($errors->has('jam_selesai'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('jam_selesai') }}
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
