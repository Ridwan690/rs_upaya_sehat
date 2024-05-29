@extends('layouts.admin')

@section('main')
    <div class="flex justify-center mt-3">
        <div class="w-8/12">
            <div class="bg-white shadow-md">
                <div class="p-4">
                    <div class="float-left">
                        Detail Tarif
                    </div>
                    <div class="float-right">
                        <a href="{{ route('tarif.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-sm">&larr; Back</a>
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex">
                        <label for="code" class="w-4/12 text-right"><strong>Nama Layanan:</strong></label>
                        <div class="w-6/12">
                            {{ $tarif->nama_layanan }}
                        </div>
                    </div>
                    <div class="flex">
                        <label for="code" class="w-4/12 text-right"><strong>Jenis Layanan:</strong></label>
                        <div class="w-6/12">
                            {{ $tarif->jenis_layanan }}
                        </div>
                    </div>
                    <div class="flex">
                        <label for="code" class="w-4/12 text-right"><strong>Biaya:</strong></label>
                        <div class="w-6/12">
                            Rp {{ number_format($tarif->biaya, 0, ',', '.') }}
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
@endsection
