@extends('layouts.admin')

@section('main')
    <div class="flex justify-center mt-3">
        <div class="w-full">
            @if ($message = Session::get('success'))
                <div class="bg-green-500 text-white p-3 mb-3">
                    {{ $message }}
                </div>
            @endif

            <div class="bg-white shadow-md">
                <div class="p-3 bg-gray-200">Tarif List</div>
                <div class="p-3">
                    <a href="{{ route('tarif.create') }}" class="bg-green-500 text-white px-3 py-2 rounded-sm mb-2"><i class="bi bi-plus-circle"></i> Tambah Tarif</a>
                    <div class="overflow-x-auto my-3">
                        <table class="table-auto w-full border-2 border-gray">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 border-2 border-gray">S#</th>
                                    <th class="px-4 py-2 border-2 border-gray">Nama Layanan</th>
                                    <th class="px-4 py-2 border-2 border-gray">Jenis Layanan</th>
                                    <th class="px-4 py-2 border-2 border-gray">Biaya</th>
                                    <th class="px-4 py-2 border-2 border-gray">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($tarif as $cost)
                                <tr>
                                    <th class="px-4 py-2 border-2 border-gray">{{ $loop->iteration }}</td>
                                    <td class="px-4 py-2 border-2 border-gray">{{ $cost->nama_layanan }}</td>
                                    <td class="px-4 py-2 border-2 border-gray">{{ $cost->jenis_layanan }}</td>
                                    <td class="px-4 py-2 border-2 border-gray">Rp {{ number_format($cost->biaya, 0, ',', '.') }}</td>
                                    <td class="px-4 py-2 border-2 border-gray">
                                        <form action="{{ route('tarif.destroy', $cost->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('tarif.show', $cost->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded-sm mx-1 my-1"><i class="bi bi-eye"></i></a>
                                            <a href="{{ route('tarif.edit', $cost->id) }}" class="bg-blue-500 text-white px-2 py-1 rounded-sm mx-1 my-1"><i class="bi bi-pencil-square"></i></a> 
                                            <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded-sm mx-1 my-1" onclick="return confirm('Do you want to delete this tarif?');"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                    <td colspan="5">
                                        <span class="text-red-500">
                                            <strong>No Tarif Found!</strong>
                                        </span>
                                    </td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    {{ $tarif->links() }}
                </div>
            </div>
        </div> 
    </div>
@endsection