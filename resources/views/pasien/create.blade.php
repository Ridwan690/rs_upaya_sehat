@extends('layouts.master')

@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Add New Pasien
                    </div>
                    <div class="float-end">
                        <a href="{{ route('pasien.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('pasien.store') }}" method="post">
                        @csrf
                        <div class="mb-3 row">
                        <label for="nama" class="col-md-4 col-form-label text-md-end text-start">Nama</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                                @if ($errors->has('nama'))
                                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="tempat_lahir" class="col-md-4 col-form-label text-md-end text-start">Tempat Lahir</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir') }}">
                                @if ($errors->has('tempat_lahir'))
                                    <span class="text-danger">{{ $errors->first('tempat_lahir') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="tanggal_lahir" class="col-md-4 col-form-label text-md-end text-start">Tanggal Lahir</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                                @if ($errors->has('tanggal_lahir'))
                                    <span class="text-danger">{{ $errors->first('tanggal_lahir') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jenis_kelamin" class="col-md-4 col-form-label text-md-end text-start">Jenis Kelamin</label>
                            <div class="col-md-6">
                                <select class="form-select @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin" name="jenis_kelamin">
                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                    <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                                @if ($errors->has('jenis_kelamin'))
                                    <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-end text-start">Alamat</label>
                            <div class="col-md-6">
                                <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat">{{ old('alamat') }}</textarea>
                                @if ($errors->has('alamat'))
                                    <span class="text-danger">{{ $errors->first('alamat') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="pendidikan" class="col-md-4 col-form-label text-md-end text-start">Pendidikan</label>
                            <div class="col-md-6">
                                <select class="form-select @error('pendidikan') is-invalid @enderror" id="pendidikan" name="pendidikan">
                                    <option value="">-- Pilih Pendidikan --</option>
                                    <option value="SD" {{ old('pendidikan') == 'SD/MI Sederajat' ? 'selected' : '' }}>SD/MI Sederajat</option>
                                    <option value="SMP" {{ old('pendidikan') == 'SMP/SLTP Sederajat' ? 'selected' : '' }}>SMP/SLTP Sederajat</option>
                                    <option value="SMA" {{ old('pendidikan') == 'SMA/SMK Sederajat' ? 'selected' : '' }}>SMA/SMK Sederajat</option>
                                    <option value="D3" {{ old('pendidikan') == 'D3' ? 'selected' : '' }}>D3</option>
                                    <option value="S1" {{ old('pendidikan') == 'S1/D4' ? 'selected' : '' }}>S1/D4</option>
                                    <option value="S2" {{ old('pendidikan') == 'S2' ? 'selected' : '' }}>S2</option>
                                    <option value="S3" {{ old('pendidikan') == 'S3' ? 'selected' : '' }}>S3</option>
                                </select>
                                @if ($errors->has('pendidikan'))
                                    <span class="text-danger">{{ $errors->first('pendidikan') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="agama" class="col-md-4 col-form-label text-md-end text-start">Agama</label>
                            <div class="col-md-6">
                                <select class="form-select @error('agama') is-invalid @enderror" id="agama" name="agama">
                                    <option value="">-- Pilih Agama --</option>
                                    <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                                    <option value="Kristen" {{ old('agama') == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                    <option value="Katolik" {{ old('agama') == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                    <option value="Hindu" {{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                    <option value="Budha" {{ old('agama') == 'Budha' ? 'selected' : '' }}>Budha</option>
                                    <option value="Konghucu" {{ old('agama') == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                                </select>
                                @if ($errors->has('agama'))
                                    <span class="text-danger">{{ $errors->first('agama') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="pekerjaan" class="col-md-4 col-form-label text-md-end text-start">Pekerjaan</label>
                            <div class="col-md-6">
                                <select class="form-select @error('pekerjaan') is-invalid @enderror" id="pekerjaan" name="pekerjaan">
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
                                @if ($errors->has('pekerjaan'))
                                    <span class="text-danger">{{ $errors->first('pekerjaan') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="status" class="col-md-4 col-form-label text-md-end text-start">Status</label>
                            <div class="col-md-6">
                                <select class="form-select @error('status') is-invalid @enderror" id="status" name="status">
                                    <option value="">-- Pilih Status --</option>
                                    <option value="Menikah" {{ old('status') == 'Menikah' ? 'selected' : '' }}>Menikah</option>
                                    <option value="Belum Menikah" {{ old('status') == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                                    <option value="Cerai" {{ old('status') == 'Cerai' ? 'selected' : '' }}>Cerai</option>
                                </select>
                                @if ($errors->has('status'))
                                    <span class="text-danger">{{ $errors->first('status') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="no_telepon" class="col-md-4 col-form-label text-md-end text-start">No Telepon</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text">+62</span>
                                    <input type="tel" class="form-control @error('no_telepon') is-invalid @enderror" id="no_telepon" name="no_telepon" value="{{ old('no_telepon') }}" maxlength="13">
                                </div>
                                @if ($errors->has('no_telepon'))
                                    <span class="text-danger">{{ $errors->first('no_telepon') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add Pasien">
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>

@endsection