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
                <div class="card-header">Pasien List</div>
                <div class="card-body">
                    <a href="{{ route('pasien.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Tambah Pasien</a>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">S#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tempat Lahir</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Pendidikan</th>
                                    <th scope="col">Agama</th>
                                    <th scope="col">Pekerjaan</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">No Telepon</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pasien as $patient)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $patient->nama }}</td>
                                    <td>{{ $patient->tempat_lahir }}</td>
                                    <td>{{ $patient->tanggal_lahir }}</td>
                                    <td>{{ $patient->jenis_kelamin }}</td>
                                    <td>{{ $patient->alamat }}</td>
                                    <td>{{ $patient->pendidikan }}</td>
                                    <td>{{ $patient->agama }}</td>
                                    <td>{{ $patient->pekerjaan }}</td>
                                    <td>{{ $patient->status }}</td>
                                    <td>{{ $patient->no_telepon }}</td>
                                    <td>
                                        <form action="{{ route('pasien.destroy', $patient->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('pasien.show', $patient->id) }}" class="btn btn-warning btn-sm mx-1 my-1"><i class="bi bi-eye"></i> Show</a>
                                            <a href="{{ route('pasien.edit', $patient->id) }}" class="btn btn-primary btn-sm mx-1 my-1"><i class="bi bi-pencil-square"></i> Edit</a> 
                                            <button type="submit" class="btn btn-danger btn-sm mx-1 my-1" onclick="return confirm('Do you want to delete this pasien?');"><i class="bi bi-trash"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                    <td colspan="12">
                                        <span class="text-danger">
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