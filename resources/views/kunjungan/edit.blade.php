@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-center mt-3 px-5">
<div class="w-100">
    <div class="card shadow-sm">
        <div class="card-header">
            <h2 class="mb-0">Edit Data Kunjungan</h2>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('kunjungan.update', $kunjungan->id) }}" method="POST">
                @csrf
                @method('PUT')

                <input type="hidden" name="rekam_medik_id" value="{{ $kunjungan->rekam_medik_id }}">
                <input type="hidden" name="dokter_id" value="{{ $kunjungan->dokter_id }}">
                <input type="hidden" name="poli_id" value="{{ $kunjungan->poli_id }}">

                <div class="form-group">
                    <label for="rekam_medik_id">Rekam Medik ID</label>
                    <input type="number" class="form-control mb-4" id="rekam_medik_id" value="{{ $kunjungan->rekam_medik_id }}" disabled>
                </div>

                <div class="form-group">
                    <label for="dokter_id">Dokter</label>
                    <select class="form-control mb-4" id="dokter_id" disabled>
                        @foreach($dokters as $dokter)
                        <option value="{{ $dokter->id }}" {{ $kunjungan->dokter_id == $dokter->id ? 'selected' : '' }}>{{ $dokter->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="poli_id">Poli</label>
                    <select class="form-control mb-4" id="poli_id" disabled>
                        @foreach($polis as $poli)
                        <option value="{{ $poli->id }}" {{ $kunjungan->poli_id == $poli->id ? 'selected' : '' }}>{{ $poli->nama_poli }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="diagnosa">Diagnosa</label>
                    <textarea class="form-control mb-4" id="diagnosa" name="diagnosa">{{ $kunjungan->diagnosa }}</textarea>
                </div>

                <div class="form-group">
                    <label for="tindakan">Tindakan</label>
                    <textarea class="form-control mb-4" id="tindakan" name="tindakan">{{ $kunjungan->tindakan }}</textarea>
                </div>

                <div class="form-group mb-4">
                            <label for="obat_id" class="form-label">Obat</label>
                            <select name="obat_id[]" id="obat_id" class="form-select @error('obat_id') is-invalid @enderror" multiple>
                                @foreach ($obats as $obat)
                                    <option value="{{ $obat->id }}" {{ in_array($obat->id, $kunjungan->obat->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $obat->nama_obat }}</option>
                                @endforeach
                            </select>
                            @error('obat_id')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="tarif_id" class="form-label">Tarif</label>
                            <select name="tarif_id[]" id="tarif_id" class="form-select @error('tarif_id') is-invalid @enderror" multiple>
                                @foreach ($tarifs as $tarif)
                                    <option value="{{ $tarif->id }}" {{ in_array($tarif->id, $kunjungan->tarif->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $tarif->nama_layanan }} - {{ $tarif->jenis_layanan }}</option>
                                @endforeach
                            </select>
                            @error('tarif_id')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
