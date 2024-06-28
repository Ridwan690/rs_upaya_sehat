@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-center mt-3">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Pendaftaran Pasien</h5>
                <a href="{{ route('pasien.index') }}" class="btn btn-primary">&larr; Back</a>
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="full-form-tab" data-bs-toggle="tab" href="#full-form" role="tab" aria-controls="full-form" aria-selected="true">Pasien Baru</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="simple-form-tab" data-bs-toggle="tab" href="#simple-form" role="tab" aria-controls="simple-form" aria-selected="false">Pasien Lama</a>
                    </li>
                </ul>
                <div class="tab-content mt-3" id="myTabContent">
                    <div class="tab-pane fade show active" id="full-form" role="tabpanel" aria-labelledby="full-form-tab">
                    <form action="{{ route('pasien.store') }}" method="post">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="tel" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{ old('nik') }}">
                            @error('nik')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                            @error('nama')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir') }}">
                            @error('tempat_lahir')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                            @error('tanggal_lahir')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-select @error('jenis_kelamin') is-invalid @enderror">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" rows="3">{{ old('alamat') }}</textarea>
                            @error('alamat')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="pendidikan" class="form-label">Pendidikan</label>
                            <select name="pendidikan" id="pendidikan" class="form-select @error('pendidikan') is-invalid @enderror">
                                <option value="">-- Pilih Pendidikan --</option>
                                <option value="Tidak/Belum Sekolah" {{ old('pendidikan') == 'Tidak/Belum Sekolah' ? 'selected' : '' }}>Tidak/Belum Sekolah</option>
                                <option value="SD/MI Sederajat" {{ old('pendidikan') == 'SD/MI Sederajat' ? 'selected' : '' }}>SD/MI Sederajat</option>
                                <option value="SMP/SLTP Sederajat" {{ old('pendidikan') == 'SMP/SLTP Sederajat' ? 'selected' : '' }}>SMP/SLTP Sederajat</option>
                                <option value="SMA/SMK Sederajat" {{ old('pendidikan') == 'SMA/SMK Sederajat' ? 'selected' : '' }}>SMA/SMK Sederajat</option>
                                <option value="D3" {{ old('pendidikan') == 'D3' ? 'selected' : '' }}>D3</option>
                                <option value="S1/D4" {{ old('pendidikan') == 'S1/D4' ? 'selected' : '' }}>S1/D4</option>
                                <option value="S2" {{ old('pendidikan') == 'S2' ? 'selected' : '' }}>S2</option>
                                <option value="S3" {{ old('pendidikan') == 'S3' ? 'selected' : '' }}>S3</option>
                            </select>
                            @error('pendidikan')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="agama" class="form-label">Agama</label>
                            <select name="agama" id="agama" class="form-select @error('agama') is-invalid @enderror">
                                <option value="">-- Pilih Agama --</option>
                                <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                                <option value="Kristen" {{ old('agama') == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                <option value="Katolik" {{ old('agama') == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                <option value="Hindu" {{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                <option value="Budha" {{ old('agama') == 'Budha' ? 'selected' : '' }}>Budha</option>
                                <option value="Konghucu" {{ old('agama') == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                            </select>
                            @error('agama')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="pekerjaan" class="form-label">Pekerjaan</label>
                            <select name="pekerjaan" id="pekerjaan" class="form-select @error('pekerjaan') is-invalid @enderror">
                                <option value="">-- Pilih Pekerjaan --</option>
                                <option value="PNS" {{ old('pekerjaan') == 'PNS' ? 'selected' : '' }}>PNS</option>
                                <option value="TNI" {{ old('pekerjaan') == 'TNI' ? 'selected' : '' }}>TNI</option>
                                <option value="Polri" {{ old('pekerjaan') == 'Polri' ? 'selected' : '' }}>Polri</option>
                                <option value="Swasta" {{ old('pekerjaan') == 'Swasta' ? 'selected' : '' }}>Swasta</option>
                                <option value="Wiraswasta" {{ old('pekerjaan') == 'Wiraswasta' ? 'selected' : '' }}>Wiraswasta</option>
                                <option value="Petani" {{ old('pekerjaan') == 'Petani' ? 'selected' : '' }}>Petani</option>
                                <option value="Nelayan" {{ old('pekerjaan') == 'Nelayan' ? 'selected' : '' }}>Nelayan</option>
                                <option value="Pedagang" {{ old('pekerjaan') == 'Pedagang' ? 'selected' : '' }}>Pedagang</option>
                                <option value="Buruh" {{ old('pekerjaan') == 'Buruh' ? 'selected' : '' }}>Buruh</option>
                                <option value="Ibu Rumah Tangga" {{ old('pekerjaan') == 'Ibu Rumah Tangga' ? 'selected' : '' }}>Ibu Rumah Tangga</option>
                                <option value="Pelajar/Mahasiswa" {{ old('pekerjaan') == 'Pelajar/Mahasiswa' ? 'selected' : '' }}>Pelajar/Mahasiswa</option>
                                <option value="Tidak Bekerja" {{ old('pekerjaan') == 'Tidak Bekerja' ? 'selected' : '' }}>Tidak Bekerja</option>
                            </select>
                            @error('pekerjaan')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-select @error('status') is-invalid @enderror">
                                <option value="">-- Pilih Status --</option>
                                <option value="Menikah" {{ old('status') == 'Menikah' ? 'selected' : '' }}>Menikah</option>
                                <option value="Belum Menikah" {{ old('status') == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                                <option value="Cerai" {{ old('status') == 'Cerai' ? 'selected' : '' }}>Cerai</option>
                            </select>
                            @error('status')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="no_telepon" class="form-label">No Telepon</label>
                            <input type="tel" class="form-control @error('no_telepon') is-invalid @enderror" id="no_telepon" name="no_telepon" value="{{ old('no_telepon') }}">
                            @error('no_telepon')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
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

                    <!-- Di sini adalah form untuk pasien lama -->
                    <div class="tab-pane fade" id="simple-form" role="tabpanel" aria-labelledby="simple-form-tab">
                        <form action="{{ route('daftarUlang') }}" method="post">
                            @csrf
                            <!-- Form Sederhana -->
                             <div class="form-group mb-4">
                                <label for="pasien_id" class="form-label">Data Pasien</label>
                                    <select class="js-example-basic-single form-select @error('pasien_id') is-invalid @enderror" style="width: 100%" name="pasien_id">
                                        <option value="">Masukkan Data Pasien</option>
                                        @foreach($pasiens as $pasien)
                                            <option value="{{ $pasien->id }}">{{ $pasien->rekammedik->no_rekam_medik }} - {{ $pasien->nik }} - {{ $pasien->nama }}</option>
                                        @endforeach
                                    </select>
                                    @error('pasien')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                             </div>
                            <div class="form-group mb-4">
                                <label for="poli_id_simple" class="form-label">Poli</label>
                                <select name="poli_id_simple" id="poli_id_simple" class="form-select @error('poli_id') is-invalid @enderror">
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
                                <label for="dokter_id_simple" class="form-label">Dokter</label>
                                <select name="dokter_id_simple" id="dokter_id_simple" class="form-select @error('dokter_id') is-invalid @enderror">
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
    </div> 
</div>
@endsection
