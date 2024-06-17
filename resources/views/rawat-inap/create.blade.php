@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-center mt-3">
        <div class="w-75">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"> Pendaftaran Rawat Inap</h5>
                    <a href="{{ route('rawat-inap.index') }}" class="btn btn-primary">
                        &larr; Back
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('rawat-inap.store') }}" method="post">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="id_rekammedik" class="form-label">NIK</label>
                            <select class="js-example-basic-single form-select @error('id_rekammedik') is-invalid @enderror" style="width: 100%" name="id_rekammedik">
                                <option value="">Masukkan NIK</option>
                                @foreach($pasiens as $pasien)
                                    <option value="{{ $pasien->rekammedik->id }}">{{ $pasien->nik }} - {{ $pasien->nama }}</option>
                                @endforeach
                            </select>
                            @error('id_rekammedik')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
                            <input type="date" class="form-control @error('tanggal_masuk') is-invalid @enderror" id="tanggal_masuk" name="tanggal_masuk" value="{{ old('tanggal_masuk') }}">
                            @error('tanggal_masuk')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="tipe_kamar" class="form-label">Tipe Kamar</label>
                            <select id="tipe_kamar" class="form-select @error('tipe_kamar') is-invalid @enderror">
                                <option value="">Pilih Tipe Kamar</option>
                                @foreach($uniqueTipeKamars as $tipe)
                                    <option value="{{ $tipe }}">{{ $tipe }}</option>
                                @endforeach
                            </select>
                            @error('tipe_kamar')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="id_kamar" class="form-label">Kamar</label>
                            <select name="id_kamar" id="id_kamar" class="form-select @error('id_kamar') is-invalid @enderror">
                                <option value="">Pilih Kamar</option>
                                @foreach($availableKamars as $kamar)
                                    <option value="{{ $kamar->id }}" data-tipe="{{ $kamar->tipe_kamar }}">{{ $kamar->kode_kamar }}</option>
                                @endforeach
                            </select>
                            @error('id_kamar')
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tipeKamarSelect = document.getElementById('tipe_kamar');
            const idKamarSelect = document.getElementById('id_kamar');
            const originalOptions = Array.from(idKamarSelect.options);

            tipeKamarSelect.addEventListener('change', function() {
                const selectedTipeKamar = this.value;

                while (idKamarSelect.options.length > 1) {
                    idKamarSelect.remove(1);
                }

                const filteredOptions = originalOptions.filter(option => 
                    option.getAttribute('data-tipe') === selectedTipeKamar
                );

                filteredOptions.forEach(option => idKamarSelect.add(option));
            });
        });
    </script>
@endsection
