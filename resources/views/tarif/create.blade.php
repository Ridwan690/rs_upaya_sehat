@extends('layouts.admin')

@section('main')
    <div class="flex justify-center mt-3">
        <div class="w-8/12">
            <div class="bg-white p-6 rounded-lg border-2 border-gray">
                <div class="flex items-center justify-between mb-4">
                    <div class="text-lg font-bold">
                        Add New Tarif
                    </div>
                    <div>
                        <a href="{{ route('tarif.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            &larr; Back
                        </a>
                    </div>
                </div>
                <div class="mb-4">
                    <form action="{{ route('tarif.store') }}" method="post">
                        @csrf
                        <div class="mb-4 flex">
                            <label for="nama_layanan" class="block text-gray-700 text-sm font-bold mb-2 mr-2">Nama Layanan</label>
                            <input type="text" class="form-input @error('nama_layanan') border-red-500 @enderror rounded-md border-2 border-gray 2 w-75" id="nama_layanan" name="nama_layanan" value="{{ old('nama_layanan') }}">
                            @error('nama_layanan')
                                <span class="text-red-500 text-xs mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4 flex">
                            <label for="jenis_layanan" class="block text-gray-700 text-sm font-bold mb-2 mr-2">Jenis Layanan</label>
                            <input type="text" class="form-input @error('jenis_layanan') border-red-500 @enderror rounded-md border-2 border-gray w-75" id="jenis_layanan" name="jenis_layanan" value="{{ old('jenis_layanan') }}">
                            @error('jenis_layanan')
                                <span class="text-red-500 text-xs mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4 flex">
                            <label for="biaya" class="block text-gray-700 text-sm font-bold mb-2 mr-2">Biaya</label>
                            {{-- <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                Rp
                            </span> --}}
                            <input type="tel" class="form-input @error('biaya') border-red-500 @enderror rounded-r-md border-2 border-gray w-75" id="biaya" name="biaya" value="{{ old('biaya') }}">    
                            @error('biaya')
                                <span class="text-red-500 text-xs mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <input type="submit" class="w-1/8 mx-auto bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" value="Add tarif">
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
@endsection
