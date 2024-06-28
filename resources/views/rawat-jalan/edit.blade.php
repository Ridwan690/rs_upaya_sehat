@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                    <h5 class="mb-0">Edit Catatan Rawat Jalan</h5>
                    <a href="{{ route('rawat-jalan.show', $rawatJalan->id) }}" class="btn btn-primary">&larr; Back</a>
                    </div>
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

                        <div class="mb-3 row">
                            <label for="catatan" class="col-sm-3 col-form-label">Catatan</label>
                            <div class="col-sm-9">
                                <textarea class="form-control @error('catatan') is-invalid @enderror" id="catatan" name="catatan" rows="3">{{ old('catatan', $rawatJalan->catatan) }}</textarea>
                                @error('catatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <br><h5>Layanan dan Obat</h5><hr>
                        <div class="mb-3 row">
                            <label for="tarif_id" class="col-sm-3 col-form-label">Layanan</label>
                            <div class="col-sm-9">
                                <select class="js-example-basic-multiple form-select @error('tarif_id') is-invalid @enderror" name="tarif_id[]" multiple="multiple">
                                    @foreach ($tarifs as $tarif)
                                    <option value="{{ $tarif->id }}" {{ in_array($tarif->id, $rawatJalan->tarif->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $tarif->nama_layanan }} - {{ $tarif->jenis_layanan }}</option>
                                    @endforeach
                                </select>
                                @error('tarif_id')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="obat_id" class="col-sm-3 col-form-label">Obat</label>
                            <div class="col-sm-9">
                                <select class="js-example-basic-multiple form-select @error('obat_id') is-invalid @enderror" name="obat_id[]" multiple="multiple">
                                    @foreach ($obats as $obat)
                                    <option value="{{ $obat->id }}" data-obat-name="{{ $obat->nama_obat }}" {{ in_array($obat->id, $rawatJalan->obat->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $obat->nama_obat }}</option>
                                    @endforeach
                                </select>
                                @error('obat_id')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <!-- Bagian Takaran Obat -->
                        <div id="takaran-container" class="mb-4">
                            <label for="takaran_obat" class="form-label">Takaran Obat</label>
                            <div id="takaran-fields"></div>
                        </div>
                        
                        <div class="form-group mb-3 pt-3">
                            <button type="submit" class="btn btn-success w-100">Update Rawat Jalan</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-script')
<script>
    $(document).ready(function () {
        $('select[name="obat_id[]"]').change(function () {
            var selectedObat = $(this).val();

            // Clear previous takaran fields
            $("#takaran-fields").empty();

            if (selectedObat.length > 0) {
                $("#takaran-container").show();

                $.each(selectedObat, function (index, obatId) {
                    var obatName = $('select[name="obat_id[]"] option[value="' + obatId + '"]').text();
                    var oldValue = "";

                    @foreach($rawatJalan->obat as $obat)
                    if ({{ $obat->id }} == obatId) {
                        oldValue = "{{ $obat->pivot->takaran }}";
                    }
                    @endforeach

                    var takaranField = `
                        <div class="mb-3 row">
                            <label for="takaran_${obatId}" class="col-sm-3 col-form-label">${obatName}</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="takaran_${obatId}" name="takaran[${obatId}]" value="${oldValue}">
                            </div>
                        </div>
                    `;
                    $("#takaran-fields").append(takaranField);
                });
            } else {
                $("#takaran-container").hide();
            }
        }).trigger("change");
    });
</script>
    @endsection