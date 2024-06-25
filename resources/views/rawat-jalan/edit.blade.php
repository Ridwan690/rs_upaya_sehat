@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h5 class="mb-0">Edit Catatan Rawat Jalan</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('rawat-jalan.update', $rawatJalan->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3 row">
                            <label for="no_rm" class="col-sm-3 col-form-label">Nomor Rekam Medis</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="no_rm" value="{{ $rawatJalan->rekammedik->no_rekam_medik }}" disabled>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nik" value="{{ $rawatJalan->rekammedik->pasien->nik }}" disabled>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="nama_pasien" class="col-sm-3 col-form-label">Nama Pasien</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama_pasien" value="{{ $rawatJalan->rekammedik->pasien->nama }}" disabled>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="tanggal" value="{{ $rawatJalan->created_at }}" disabled>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="kunjungan" class="col-sm-3 col-form-label">Kunjungan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="kunjungan" value="{{ $rawatJalan->kunjungan_count }}" disabled>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="poli" class="col-sm-3 col-form-label">Poli</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="poli" value="{{ $rawatJalan->antrian->poli->nama_poli }}" disabled>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="dokter" class="col-sm-3 col-form-label">Dokter</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="dokter" value="{{ $rawatJalan->antrian->dokter->nama }}" disabled>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="catatan" class="form-label">Catatan</label>
                            <textarea class="form-control @error('catatan') is-invalid @enderror" id="catatan" name="catatan" rows="3">{{ old('catatan', $rawatJalan->catatan) }}</textarea>
                            @error('catatan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="obat_id" class="form-label">Obat</label>
                            <select class="custom-multiple form-select @error('tarif_id') is-invalid @enderror" name="obat_id[]" multiple="multiple">
                                @foreach ($obats as $obat)
                                <option value="{{ $obat->id }}" {{ in_array($obat->id, $rawatJalan->obat->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $obat->nama_obat }}</option>
                                @endforeach
                            </select>
                            @error('obat_id')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="tarif_id" class="form-label">Obat</label>
                            <select class="custom-multiple form-select @error('tarif_id') is-invalid @enderror" name="tarif_id[]" multiple="multiple">
                                @foreach ($tarifs as $tarif)
                                <option value="{{ $tarif->id }}" {{ in_array($tarif->id, $rawatJalan->tarif->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $tarif->nama_layanan }} - {{ $tarif->jenis_layanan }}</option>
                                @endforeach
                            </select>
                            @error('tarif_id')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success">Update Catatan</button>
                        <a href="{{ route('rawat-jalan.show', $rawatJalan->id) }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
