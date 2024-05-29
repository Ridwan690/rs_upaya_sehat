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
                        Edit Tarif
                    </div>
                    <div>
                        <a href="{{ route('tarif.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            &larr; Back
                        </a>
                    </div>
                </div>
                <div class="mb-4">
                    <form action="{{ route('tarif.update', $tarif->id) }}" method="post">
                        @csrf
                        @method("PUT")
                        <div class="mb-4 ">
                            <label for="nama_layanan" class="block text-sm font-bold text-gray-700 mb-2 mr-2">Nama Layanan</label>
                            <input type="text" class="form-input @error('code') border-red-500 @enderror rounded-md border-2 border-gray w-75" id="nama_layanan" name="nama_layanan" value="{{ $tarif->nama_layanan }}">
                            @if ($errors->has('nama_layanan'))
                                <span class="text-red-500">{{ $errors->first('nama_layanan') }}</span>
                            @endif
                        </div>
                        <div class="mb-4 ">
                            <label for="jenis_layanan" class="block text-sm font-bold text-gray-700 mb-2 mr-2">Jenis Layanan</label>
                            <input type="text" class="form-input @error('jenis_layanan') border-red-500 @enderror rounded-md border-2 border-gray w-75" id="jenis_layanan" name="jenis_layanan" value="{{ $tarif->jenis_layanan }}">
                            @if ($errors->has('jenis_layanan'))
                                <span class="text-red-500">{{ $errors->first('jenis_layanan') }}</span>
                            @endif
                        </div>
                        <div class="mb-4 ">
                            <label for="biaya" class="block text-sm font-bold text-gray-700 mb-2 mr-2">Biaya</label>
                            {{-- <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500">
                                Rp
                            </span> --}}
                            <input type="tel" class="form-input @error('biaya') border-red-500 @enderror rounded-r-md border-2 border-gray w-75" id="biaya" name="biaya" value="{{ $tarif->biaya }}">
                            @if ($errors->has('biaya'))
                                <span class="text-red-500">{{ $errors->first('biaya') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <input type="submit" class="w-1/8 mx-auto bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
@endsection