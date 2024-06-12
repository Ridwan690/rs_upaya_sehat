@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-center mt-3">
        <div class="w-75">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Add New Daftar Rawat Jalan</h5>
                    <a href="{{ route('rawat-jalan.index') }}" class="btn btn-primary">
                        &larr; Back
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('rawat-jalan.store') }}" method="post">
                        @csrf
                        <div class="form-group mb-4">
                                <label for="pasien_id" class="form-label">NIK</label>
                                    <select class="js-example-basic-single form-select @error('pasien_id') is-invalid @enderror" style="width: 100%" name="pasien_id">
                                        <option value="">Masukkan NIK</option>
                                        @foreach($pasiens as $pasien)
                                            <option value="{{ $pasien->id }}">{{ $pasien->nik }} - {{ $pasien->nama }}</option>
                                        @endforeach
                                    </select>
                                    @error('pasien')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                             </div>
                            <!-- <div class="form-group mb-4">
                                <label for="nik_simple" class="form-label">NIK</label>
                                <input type="tel" class="form-control @error('nik') is-invalid @enderror" id="nik_simple" name="nik" value="{{ old('nik') }}">
                                @error('nik')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div> -->
                            <div class="form-group mb-4">
                                <label for="poli_id" class="form-label">Poli</label>
                                <select name="poli_id" id="poli_id" class="form-select @error('poli_id') is-invalid @enderror">
                                    <option value="">Pilih Poli</option>
                                    @foreach($polis as $poli)
                                        <option value="{{ $poli->id }}">{{ $poli->nama_poli }}</option>
                                    @endforeach
                                </select>
                                @error('poli')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <label for="dokter_id" class="form-label">Dokter</label>
                                <select name="dokter_id" id="dokter_id" class="form-select @error('dokter_id') is-invalid @enderror">
                                    <option value="">Pilih Dokter</option>
                                    <!-- Dokter options will be populated here based on selected poli -->
                                </select>
                                @error('dokter')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-success w-100">Add Pasien</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
