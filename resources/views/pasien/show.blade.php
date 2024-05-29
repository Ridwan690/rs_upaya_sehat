@extends('layouts.admin')

@section('main')
    <div class="flex justify-center mt-3">
        <div class="w-8/12">
            <div class="bg-white shadow-md rounded-lg">
                <div class="flex items-center justify-between px-4 py-2">
                    <div class="text-lg font-bold">
                        Detail Pasien
                    </div>
                    <div>
                        <a href="{{ route('pasien.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-sm">&larr; Back</a>
                    </div>
                </div>
                <div class="px-4 py-2">
                    <div class="flex items-center mb-2">
                        <label for="code" class="w-1/3 text-right pr-4"><strong>Nama:</strong></label>
                        <div class="w-2/3">
                            {{ $pasien->nama }}
                        </div>
                    </div>
                    <div class="flex items-center mb-2">
                        <label for="name" class="w-1/3 text-right pr-4"><strong>Tempat Lahir:</strong></label>
                        <div class="w-2/3">
                            {{ $pasien->tempat_lahir }}
                        </div>
                    </div>
                    <div class="flex items-center mb-2">
                        <label for="name" class="w-1/3 text-right pr-4"><strong>Tanggal Lahir:</strong></label>
                        <div class="w-2/3">
                            {{ $pasien->tanggal_lahir }}
                        </div>
                    </div>
                    <div class="flex items-center mb-2">
                        <label for="name" class="w-1/3 text-right pr-4"><strong>Jenis Kelamin:</strong></label>
                        <div class="w-2/3">
                            {{ $pasien->jenis_kelamin }}
                        </div>
                    </div>
                    <div class="flex items-center mb-2">
                        <label for="name" class="w-1/3 text-right pr-4"><strong>Alamat:</strong></label>
                        <div class="w-2/3">
                            {{ $pasien->alamat }}
                        </div>
                    </div>
                    <div class="flex items-center mb-2">
                        <label for="name" class="w-1/3 text-right pr-4"><strong>Pendidikan:</strong></label>
                        <div class="w-2/3">
                            {{ $pasien->pendidikan }}
                        </div>
                    </div>
                    <div class="flex items-center mb-2">
                        <label for="name" class="w-1/3 text-right pr-4"><strong>Agama:</strong></label>
                        <div class="w-2/3">
                            {{ $pasien->agama }}
                        </div>
                    </div>
                    <div class="flex items-center mb-2">
                        <label for="name" class="w-1/3 text-right pr-4"><strong>Pekerjaan:</strong></label>
                        <div class="w-2/3">
                            {{ $pasien->pekerjaan }}
                        </div>
                    </div>
                    <div class="flex items-center mb-2">
                        <label for="name" class="w-1/3 text-right pr-4"><strong>Status:</strong></label>
                        <div class="w-2/3">
                            {{ $pasien->status }}
                        </div>
                    </div>
                    <div class="flex items-center mb-2">
                        <label for="name" class="w-1/3 text-right pr-4"><strong>No Telepon:</strong></label>
                        <div class="w-2/3">
                            {{ $pasien->no_telepon }}
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
@endsection
