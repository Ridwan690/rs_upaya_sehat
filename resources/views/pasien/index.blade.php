@extends('layouts.admin')

@section('main')
    <div class="flex justify-center">
        <div class="w-full">
            @if ($message = Session::get('success'))
                <div class="bg-green-500 text-white p-3 mb-3">
                    {{ $message }}
                </div>
            @endif

            <div class="bg-white shadow-md">
                <div class="p-3 bg-gray-200">Pasien List</div>
                <div class="p-3">
                    <a href="{{ route('pasien.create') }}" class="bg-green-500 text-white px-3 py-2 rounded-sm mb-2"><i class="bi bi-plus-circle"></i> Tambah Pasien</a>
                    <div class="overflow-x-auto my-3">
                        <table class="table-auto w-full border-2 border-gray">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 border-2 border-gray">S#</th>
                                    <th class="px-4 py-2 border-2 border-gray">Nama</th>
                                    {{-- <th class="px-4 py-2 border-2 border-gray">Tempat Lahir</th> --}}
                                    <th class="px-4 py-2 border-2 border-gray">Tanggal Lahir</th>
                                    <th class="px-4 py-2 border-2 border-gray">Jenis Kelamin</th>
                                    <th class="px-4 py-2 border-2 border-gray">Alamat</th>
                                    {{-- <th class="px-4 py-2 border-2 border-gray">Pendidikan</th> --}}
                                    {{-- <th class="px-4 py-2 border-2 border-gray">Agama</th> --}}
                                    {{-- <th class="px-4 py-2 border-2 border-gray">Pekerjaan</th> --}}
                                    {{-- <th class="px-4 py-2 border-2 border-gray">Status</th> --}}
                                    <th class="px-4 py-2 border-2 border-gray">No Telepon</th>
                                    <th class="px-4 py-2 border-2 border-gray">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pasien as $patient)
                                <tr>
                                    <th class="px-4 py-2 border-2 border-gray">{{ $loop->iteration }}</th>
                                    <td class="px-4 py-2 border-2 border-gray">{{ $patient->nama }}</td>
                                    {{-- <td class="px-4 py-2 border-2 border-gray">{{ $patient->tempat_lahir }}</td> --}}
                                    <td class="px-4 py-2 border-2 border-gray">{{ $patient->tanggal_lahir }}</td>
                                    <td class="px-4 py-2 border-2 border-gray">{{ $patient->jenis_kelamin }}</td>
                                    <td class="px-4 py-2 border-2 border-gray">{{ $patient->alamat }}</td>
                                    {{-- <td class="px-4 py-2 border-2 border-gray">{{ $patient->pendidikan }}</td> --}}
                                    {{-- <td class="px-4 py-2 border-2 border-gray">{{ $patient->agama }}</td> --}}
                                    {{-- <td class="px-4 py-2 border-2 border-gray">{{ $patient->pekerjaan }}</td> --}}
                                    {{-- <td class="px-4 py-2 border-2 border-gray">{{ $patient->status }}</td> --}}
                                    <td class="px-4 py-2 border-2 border-gray">{{ $patient->no_telepon }}</td>
                                    <td class="px-4 py-2 border-2 border-gray">
                                        <form action="{{ route('pasien.destroy', $patient->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('pasien.show', $patient->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded-sm mx-1 my-2"><i class="bi bi-eye"></i></a>
                                            <a href="{{ route('pasien.edit', $patient->id) }}" class="bg-blue-500 text-white px-2 py-1 rounded-sm mx-1 my-2"><i class="bi bi-pencil-square"></i></a> 
                                            <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded-sm mx-1 my-2" onclick="return confirm('Do you want to delete this pasien?');"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                    <td colspan="12">
                                        <span class="text-red-500">
                                            <strong>No Pasien Found!</strong>
                                        </span>
                                    </td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    {{ $pasien->links() }}
                </div>
            </div>
        </div> 
    </div>
@endsection