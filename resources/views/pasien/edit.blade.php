@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-center mt-3">
        <div class="col-md-8">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
            @endif

            <div class="card shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Edit Pasien</h5>
                    <a href="{{ route('pasien.index') }}" class="btn btn-primary">&larr; Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('pasien.update', $pasien->id) }}" method="post">
                        @csrf
                        @method("PUT")
                        <div class="mb-3">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{ $pasien->nik }}">
                            @error('nik')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $pasien->nama }}">
                            @error('nama')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" value="{{ $pasien->tempat_lahir }}">
                            @error('tempat_lahir')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" value="{{ $pasien->tanggal_lahir }}">
                            @error('tanggal_lahir')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select class="form-select @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin" name="jenis_kelamin">
                                <option value="L" {{ $pasien->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="P" {{ $pasien->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat">{{ $pasien->alamat }}</textarea>
                            @error('alamat')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="pendidikan" class="form-label">Pendidikan</label>
                            <select class="form-select @error('pendidikan') is-invalid @enderror" id="pendidikan" name="pendidikan">
                                <option value="Tidak/Belum Sekolah" {{ $pasien->pendidikan == 'Tidak/Belum Sekolah' ? 'selected' : '' }}>Tidak/Belum Sekolah</option>
                                <option value="SD/MI Sederajat" {{ $pasien->pendidikan == 'SD/MI Sederajat' ? 'selected' : '' }}>SD/MI Sederajat</option>
                                <option value="SMP/SLTP Sederajat" {{ $pasien->pendidikan == 'SMP/SLTP Sederajat' ? 'selected' : '' }}>SMP/SLTP Sederajat</option>
                                <option value="SMA/SMK Sederajat" {{ $pasien->pendidikan == 'SMA/SMK Sederajat' ? 'selected' : '' }}>SMA/SMK Sederajat</option>
                                <option value="D3" {{ $pasien->pendidikan == 'D3' ? 'selected' : '' }}>D3</option>
                                <option value="S1/D4" {{ $pasien->pendidikan == 'S1/D4' ? 'selected' : '' }}>S1/D4</option>
                                <option value="S2" {{ $pasien->pendidikan == 'S2' ? 'selected' : '' }}>S2</option>
                                <option value="S3" {{ $pasien->pendidikan == 'S3' ? 'selected' : '' }}>S3</option>
                            </select>
                            @error('pendidikan')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="agama" class="form-label">Agama</label>
                            <select class="form-select @error('agama') is-invalid @enderror" id="agama" name="agama">
                                <option value="Islam" {{ $pasien->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                                    <option value="Kristen" {{ $pasien->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                    <option value="Katolik" {{ $pasien->agama == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                    <option value="Hindu" {{ $pasien->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                    <option value="Budha" {{ $pasien->agama == 'Budha' ? 'selected' : '' }}>Budha</option>
                                    <option value="Konghucu" {{ $pasien->agama == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                            </select>
                            @error('agama')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="pekerjaan" class="form-label">Pekerjaan</label>
                            <select name="pekerjaan" id="pekerjaan" class="form-select @error('pekerjaan') is-invalid @enderror">
                                <option value="PNS" {{ $pasien->pekerjaan == 'PNS' ? 'selected' : '' }}>PNS</option>
                                <option value="TNI" {{ $pasien->pekerjaan == 'TNI' ? 'selected' : '' }}>TNI</option>
                                <option value="Polri" {{ $pasien->pekerjaan == 'Polri' ? 'selected' : '' }}>Polri</option>
                                <option value="Swasta" {{ $pasien->pekerjaan == 'Swasta' ? 'selected' : '' }}>Swasta</option>
                                <option value="Wiraswasta" {{ $pasien->pekerjaan == 'Wiraswasta' ? 'selected' : '' }}>Wiraswasta</option>
                                <option value="Petani" {{ $pasien->pekerjaan == 'Petani' ? 'selected' : '' }}>Petani</option>
                                <option value="Nelayan" {{ $pasien->pekerjaan == 'Nelayan' ? 'selected' : '' }}>Nelayan</option>
                                <option value="Pedagang" {{ $pasien->pekerjaan == 'Pedagang' ? 'selected' : '' }}>Pedagang</option>
                                <option value="Buruh" {{ $pasien->pekerjaan == 'Buruh' ? 'selected' : '' }}>Buruh</option>
                                <option value="Ibu Rumah Tangga" {{ $pasien->pekerjaan == 'Ibu Rumah Tangga' ? 'selected' : '' }}>Ibu Rumah Tangga</option>
                                <option value="Pelajar/Mahasiswa" {{ $pasien->pekerjaan == 'Pelajar/Mahasiswa' ? 'selected' : '' }}>Pelajar/Mahasiswa</option>
                                <option value="Tidak Bekerja" {{ $pasien->pekerjaan == 'Tidak Bekerja' ? 'selected' : '' }}>Tidak Bekerja</option>
                            </select>
                            @error('pekerjaan')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select @error('status') is-invalid @enderror" id="status" name="status">
                                <option value="Menikah" {{ old('status') == 'Menikah' ? 'selected' : '' }}>Menikah</option>
                                <option value="Belum Menikah" {{ old('status') == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                                <option value="Cerai" {{ old('status') == 'Cerai' ? 'selected' : '' }}>Cerai</option>
                            </select>
                            @error('status')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="no_telepon" class="form-label">No Telepon</label>
                            <input type="tel" class="form-control @error('no_telepon') is-invalid @enderror" id="no_telepon" name="no_telepon" value="{{ $pasien->no_telepon }}">
                            @error('no_telepon')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
