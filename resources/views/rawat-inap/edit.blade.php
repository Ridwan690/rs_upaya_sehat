@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-center mt-3">
        <div class="w-75">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Update Rawat Inap</h5>
                    <a href="{{ route('rawat-inap.show', $rawatInap->id) }}" class="btn btn-primary">
                        &larr; Back
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('rawat-inap.update', $rawatInap->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-4">
                            <label for="tanggal_keluar" class="form-label">Tanggal Keluar</label>
                            <input type="date" class="form-control @error('tanggal_keluar') is-invalid @enderror" id="tanggal_keluar" name="tanggal_keluar" value="{{ old('tanggal_keluar', $rawatInap->tanggal_keluar) }}">
                            @error('tanggal_keluar')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-select @error('status') is-invalid @enderror">
                                <option value="Ditangani" {{ $rawatInap->status == 'Ditangani' ? 'selected' : '' }}>Ditangani</option>
                                <option value="Belum Ditangani" {{ $rawatInap->status == 'Belum Ditangani' ? 'selected' : '' }}>Belum Ditangani</option>
                            </select>
                            @error('status')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="catatan" class="form-label">Catatan</label>
                            <textarea class="form-control @error('catatan') is-invalid @enderror" id="catatan" name="catatan" rows="3">{{ old('catatan', $rawatInap->catatan) }}</textarea>
                            @error('catatan')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <br><h5>Layanan dan Obat</h5><hr>
                        <div class="form-group mb-4">
                            <label for="tarif_id" class="form-label">Layanan</label>
                            <select class="js-example-basic-multiple form-select @error('tarif_id') is-invalid @enderror" name="tarif_id[]" multiple="multiple">
                                @foreach ($tarifs as $tarif)
                                <option value="{{ $tarif->id }}" {{ in_array($tarif->id, $rawatInap->tarif->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $tarif->nama_layanan }} - {{ $tarif->jenis_layanan }}</option>
                                @endforeach
                            </select>
                            @error('tarif_id')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="obat_id" class="form-label">Obat</label>
                            <select class="js-example-basic-multiple form-select @error('tarif_id') is-invalid @enderror" name="obat_id[]" multiple="multiple">
                                @foreach ($obats as $obat)
                                <option value="{{ $obat->id }}" {{ in_array($obat->id, $rawatInap->obat->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $obat->nama_obat }}</option>
                                @endforeach
                            </select>
                            @error('obat_id')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                         <!-- Bagian Takaran Obat -->
                         <div id="takaran-container" class="mb-4">
                            <label for="takaran_obat" class="form-label">Takaran Obat</label>
                            <div id="takaran-fields"></div>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-success w-100">Update Rawat Inap</button>
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

                    @foreach($rawatInap->obat as $obat)
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