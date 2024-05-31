@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-center mt-3 px-5">
        <div class="w-100">
            @if ($message = Session::get('success'))
                <div class="alert alert-success mb-3">
                    {{ $message }}
                </div>
            @endif

            <div class="card shadow-sm">
                <div class="card-header bg-dark">
                    <h5 class="mb-0">Pasien List</h5>
                </div>
                <div class="card-body">
                    <a href="{{ route('pasien.create') }}" class="btn btn-success mb-3"><i class="fas fa-plus-circle"></i> Tambah Pasien</a>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">S#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">No Telepon</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pasien as $patient)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $patient->nama }}</td>
                                    <td>{{ $patient->tanggal_lahir }}</td>
                                    <td>{{ $patient->jenis_kelamin }}</td>
                                    <td>{{ $patient->alamat }}</td>
                                    <td>{{ $patient->no_telepon }}</td>
                                    <td>
                                        <form action="{{ route('pasien.destroy', $patient->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('pasien.show', $patient->id) }}" class="btn btn-warning btn-sm mx-1"><i class="fas fa-eye"></i></a>
                                            <a href="{{ route('pasien.edit', $patient->id) }}" class="btn btn-primary btn-sm mx-1"><i class="fas fa-pencil-alt"></i></a> 
                                            <button type="submit" class="btn btn-danger btn-sm mx-1" onclick="return confirm('Do you want to delete this pasien?');"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center text-danger">
                                            <strong>No Pasien Found!</strong>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    {{ $pasien->links() }}
                </div>
            </div>
            <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
    <ul class="pagination">
        <!-- Tombol "Previous" -->
        @if ($pasien->onFirstPage())
            <li class="page-item disabled">
                <span class="page-link">Previous</span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $pasien->previousPageUrl() }}" rel="prev">Previous</a>
            </li>
        @endif

        <!-- Tampilkan navigasi nomor untuk halaman-halaman spesifik -->
        @foreach ($pasien->getUrlRange(1, $pasien->lastPage()) as $page => $url)
            <li class="page-item {{ $page == $pasien->currentPage() ? 'active' : '' }}">
                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
            </li>
        @endforeach

        <!-- Tombol "Next" -->
        @if ($pasien->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $pasien->nextPageUrl() }}" rel="next">Next</a>
            </li>
        @else
            <li class="page-item disabled">
                <span class="page-link">Next</span>
            </li>
        @endif
    </ul>
</nav>

        </div>
    </div>
@endsection
