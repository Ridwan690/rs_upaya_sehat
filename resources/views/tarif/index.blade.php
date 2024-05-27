@extends('layouts.master')

@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-md-12">
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            @endif

            <div class="card">
                <div class="card-header">Tarif List</div>
                <div class="card-body">
                    <a href="{{ route('tarif.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Tambah Tarif</a>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">S#</th>
                                    <th scope="col">Nama Layanan</th>
                                    <th scope="col">Jenis Layanan</th>
                                    <th scope="col">Biaya</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($tarif as $cost)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $cost->nama_layanan }}</td>
                                    <td>{{ $cost->jenis_layanan }}</td>
                                    <td>Rp {{ number_format($cost->biaya, 0, ',', '.') }}</td>
                                    <td>
                                        <form action="{{ route('tarif.destroy', $cost->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('tarif.show', $cost->id) }}" class="btn btn-warning btn-sm mx-1 my-1"><i class="bi bi-eye"></i> Show</a>
                                            <a href="{{ route('tarif.edit', $cost->id) }}" class="btn btn-primary btn-sm mx-1 my-1"><i class="bi bi-pencil-square"></i> Edit</a> 
                                            <button type="submit" class="btn btn-danger btn-sm mx-1 my-1" onclick="return confirm('Do you want to delete this tarif?');"><i class="bi bi-trash"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                    <td colspan="12">
                                        <span class="text-danger">
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