@extends('layouts.admin')

@section('main')
    <div class="flex justify-center mt-3">
        <div class="w-8/12">
            <div class="bg-white p-6 rounded-lg border-2 border-gray">
                <div class="flex items-center justify-between mb-4">
                    <div class="text-lg font-bold">
                        Add New Pasien
                    </div>
                    <div class="flex items-center">
                        <a href="{{ route('pasien.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">&larr; Back</a>
                    </div>
                </div>
                <div class="mb-4">
                    <form action="{{ route('pasien.store') }}" method="post">
                        @csrf
                        <div class="mb-4">
                            <label for="nama" class="block text-sm font-bold text-gray-700 mb-2 mr-2">Nama</label>
                            <input type="text" class="form-input @error('nama') border-red-500 @enderror rounded-md border-2 border-gray 2 w-75" id="nama" name="nama" value="{{ old('nama') }}">
                            @if ($errors->has('nama'))
                                <span class="text-red-500">{{ $errors->first('nama') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="tempat_lahir" class="block text-sm font-bold text-gray-700 mb-2 mr-2">Tempat Lahir</label>
                            <input type="text" class="form-input @error('tempat_lahir') border-red-500 @enderror rounded-md border-2 border-gray w-75" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir') }}">
                            @if ($errors->has('tempat_lahir'))
                                <span class="text-red-500">{{ $errors->first('tempat_lahir') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="tanggal_lahir" class="block text-sm font-bold text-gray-700 mb-2 mr-2">Tanggal Lahir</label>
                            <input type="date" class="form-input @error('tanggal_lahir') border-red-500 @enderror rounded-md border-2 border-gray w-75" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                            @if ($errors->has('tanggal_lahir'))
                                <span class="text-red-500">{{ $errors->first('tanggal_lahir') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="jenis_kelamin" class="block text-sm font-bold text-gray-700 mb-2 mr-2">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-select @error('jenis_kelamin') border-red-500 @enderror rounded-md border-2 border-gray w-75">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                            @if ($errors->has('jenis_kelamin'))
                                <span class="text-red-500">{{ $errors->first('jenis_kelamin') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="alamat" class="block text-sm font-bold text-gray-700 mb-2 mr-2">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-textarea @error('alamat') border-red-500 @enderror rounded-md border-2 border-gray w-75" cols="30" rows="5">{{ old('alamat') }}</textarea>
                            @if ($errors->has('alamat'))
                                <span class="text-red-500">{{ $errors->first('alamat') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="pendidikan" class="block text-sm font-bold text-gray-700 mb-2 mr-2">Pendidikan</label>
                            <select name="pendidikan" id="pendidikan" class="form-select @error('pendidikan') border-red-500 @enderror rounded-md border-2 border-gray w-75">
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
                                <span class="text-red-500">{{ $errors->first('pendidikan') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="agama" class="block text-sm font-bold text-gray-700 mb-2 mr-2">Agama</label>
                            <select name="agama" id="agama" class="form-select @error('agama') border-red-500 @enderror rounded-md border-2 border-gray w-75">
                                <option value="">-- Pilih Agama --</option>
                                <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                                <option value="Kristen" {{ old('agama') == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                <option value="Katolik" {{ old('agama') == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                <option value="Hindu" {{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                <option value="Budha" {{ old('agama') == 'Budha' ? 'selected' : '' }}>Budha</option>
                                <option value="Konghucu" {{ old('agama') == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                            </select>
                            @if ($errors->has('agama'))
                                <span class="text-red-500">{{ $errors->first('agama') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="pekerjaan" class="block text-sm font-bold text-gray-700 mb-2 mr-2">Pekerjaan</label>
                            <select name="pekerjaan" id="pekerjaan" class="form-select @error('pekerjaan') border-red-500 @enderror rounded-md border-2 border-gray w-75">
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
                                <span class="text-red-500">{{ $errors->first('pekerjaan') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="status" class="block text-sm font-bold text-gray-700 mb-2 mr-2">Status</label>
                            <select name="status" id="status" class="form-select @error('status') border-red-500 @enderror rounded-md border-2 border-gray w-75">
                                <option value="">-- Pilih Status --</option>
                                <option value="Menikah" {{ old('status') == 'Menikah' ? 'selected' : '' }}>Menikah</option>
                                <option value="Belum Menikah" {{ old('status') == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                                <option value="Cerai" {{ old('status') == 'Cerai' ? 'selected' : '' }}>Cerai</option>
                            </select>
                            @if ($errors->has('status'))
                                <span class="text-red-500">{{ $errors->first('status') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="no_telepon" class="block text-sm font-bold text-gray-700 mb-2 mr-2">No Telepon</label>
                            <input type="tel" class="form-input @error('no_telepon') border-red-500 @enderror rounded-md border-2 border-gray w-75" id="no_telepon" name="no_telepon" value="{{ old('no_telepon') }}">
                            @if ($errors->has('no_telepon'))
                                <span class="text-red-500">{{ $errors->first('no_telepon') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="w-full px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded-md hover:bg-blue-600" value="Add Pasien">
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>

@endsection
