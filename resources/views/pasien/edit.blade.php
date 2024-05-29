@extends('layouts.admin')

@section('main')
    <div class="flex justify-center mt-3">
        <div class="w-8/12">
            @if ($message = Session::get('success'))
                <div class="bg-green-500 text-white p-4 mb-4">
                    {{ $message }}
                </div>
            @endif

            <div class="bg-white p-6 rounded-lg border-2 border-gray">
                <div class="flex items-center justify-between mb-4">
                    <div class="text-lg font-bold">
                        Edit Pasien
                    </div>
                    <div>
                        <a href="{{ route('pasien.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            &larr; Back
                        </a>
                    </div>
                </div>
                <div class="mb-4">
                    <form action="{{ route('pasien.update', $pasien->id) }}" method="post">
                        @csrf
                        @method("PUT")
                        <div class="mb-4">
                            <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                            <input type="text" class="form-input @error('code') border-red-500 @enderror" id="nama" name="nama" value="{{ $pasien->nama }}">
                            @if ($errors->has('nama'))
                                <span class="text-red-500">{{ $errors->first('nama') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="tempat_lahir" class="block text-sm font-medium text-gray-700">Tempat Lahir</label>
                            <input type="text" class="form-input @error('tempat_lahir') border-red-500 @enderror" id="tempat_lahir" name="tempat_lahir" value="{{ $pasien->tempat_lahir }}">
                            @if ($errors->has('tempat_lahir'))
                                <span class="text-red-500">{{ $errors->first('tempat_lahir') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                            <input type="date" class="form-input @error('tanggal_lahir') border-red-500 @enderror" id="tanggal_lahir" name="tanggal_lahir" value="{{ $pasien->tanggal_lahir }}">
                            @if ($errors->has('tanggal_lahir'))
                                <span class="text-red-500">{{ $errors->first('tanggal_lahir') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                            <select class="form-select @error('jenis_kelamin') border-red-500 @enderror rounded-md border-2 border-gray w-75" id="jenis_kelamin" name="jenis_kelamin">
                                <option value="L" {{ $pasien->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="P" {{ $pasien->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                            @if ($errors->has('jenis_kelamin'))
                                <span class="text-red-500">{{ $errors->first('jenis_kelamin') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                            <textarea class="form-textarea @error('alamat') border-red-500 @enderror rounded-md border-2 border-gray w-75" id="alamat" name="alamat">{{ $pasien->alamat }}</textarea>
                            @if ($errors->has('alamat'))
                                <span class="text-red-500">{{ $errors->first('alamat') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="pendidikan" class="block text-sm font-medium text-gray-700">Pendidikan</label>
                            <select class="form-select @error('pendidikan') border-red-500 @enderror rounded-md border-2 border-gray w-75" id="pendidikan" name="pendidikan">
                                <option value="SD/MI Sederajat" {{ $pasien->pendidikan == 'SD/MI Sederajat' ? 'selected' : '' }}>SD/MI Sederajat</option>
                                <option value="SMP/SLTP Sederajat" {{ $pasien->pendidikan == 'SMP/SLTP Sederajat' ? 'selected' : '' }}>SMP/SLTP Sederajat</option>
                                <option value="SMA/SMK Sederajat" {{ $pasien->pendidikan == 'SMA/SMK Sederajat' ? 'selected' : '' }}>SMA/SMK Sederajat</option>
                                <option value="D3" {{ $pasien->pendidikan == 'D3' ? 'selected' : '' }}>D3</option>
                                <option value="S1/D4" {{ $pasien->pendidikan == 'S1/D4' ? 'selected' : '' }}>S1/D4</option>
                                <option value="S2" {{ $pasien->pendidikan == 'S2' ? 'selected' : '' }}>S2</option>
                                <option value="S3" {{ $pasien->pendidikan == 'S3' ? 'selected' : '' }}>S3</option>
                            </select>
                            @if ($errors->has('pendidikan'))
                                <span class="text-red-500">{{ $errors->first('pendidikan') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="agama" class="block text-sm font-medium text-gray-700">Agama</label>
                            <select class="form-select @error('agama') border-red-500 @enderror rounded-md border-2 border-gray w-75" id="agama" name="agama">
                                <option value="Islam" {{ $pasien->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                                <option value="Kristen" {{ $pasien->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                <option value="Katolik" {{ $pasien->agama == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                <option value="Hindu" {{ $pasien->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                <option value="Budha" {{ $pasien->agama == 'Budha' ? 'selected' : '' }}>Budha</option>
                                <option value="Konghucu" {{ $pasien->agama == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                            </select>
                            @if ($errors->has('agama'))
                                <span class="text-red-500">{{ $errors->first('agama') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="pekerjaan" class="block text-sm font-medium text-gray-700">Pekerjaan</label>
                            <select class="form-select @error('pekerjaan') border-red-500 @enderror rounded-md border-2 border-gray w-75" id="pekerjaan" name="pekerjaan">
                                <option value="PNS" {{ $pasien->pekerjaan == 'PNS' ? 'selected' : '' }}>PNS</option>
                                <option value="TNI" {{ $pasien->pekerjaan == 'TNI' ? 'selected' : '' }}>TNI</option>
                                <option value="POLRI" {{ $pasien->pekerjaan == 'POLRI' ? 'selected' : '' }}>POLRI</option>
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
                            @if ($errors->has('pekerjaan'))
                                <span class="text-red-500">{{ $errors->first('pekerjaan') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                            <select class="form-select @error('status') border-red-500 @enderror rounded-md border-2 border-gray w-75" id="status" name="status">
                                <option value="Belum Menikah" {{ $pasien->status == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                                <option value="Menikah" {{ $pasien->status == 'Menikah' ? 'selected' : '' }}>Menikah</option>
                                <option value="Cerai" {{ $pasien->status == 'Cerai' ? 'selected' : '' }}>Cerai</option>
                            </select>
                            @if ($errors->has('status'))
                                <span class="text-red-500">{{ $errors->first('status') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="no_telepon" class="block text-sm font-medium text-gray-700">No Telepon</label>
                            <input type="text" class="form-input @error('no_telepon') border-red-500 @enderror rounded-md border-2 border-gray w-75" id="no_telepon" name="no_telepon" value="{{ $pasien->no_telepon }}">
                            @if ($errors->has('no_telepon'))
                                <span class="text-red-500">{{ $errors->first('no_telepon') }}</span>
                            @endif
                            </div>
                        </div>
                        <div class="mb-4">
                            <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
@endsection