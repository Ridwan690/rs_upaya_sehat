@extends('layouts.admin')

@section('content')
<main class="content px-3 py-2">
    <div class="container-fluid">
        @if ($message = Session::get('success'))
            <div class="alert alert-success mb-3">
                {{ $message }}
            </div>
        @endif
        <div class="mb-3 d-flex align-items-center justify-content-between">
            <h5>Dokter List</h5>
            <a href="{{ route('dokter.create') }}" class="btn btn-success"><i class="fas fa-plus-circle"></i> Tambah Dokter</a>
        </div>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">S#</th>
                            <th scope="col">Nama Dokter</th>
                            <th scope="col">Spesialis</th>
                            <th scope="col">Nama Poli</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($dokter as $doctor)
                        <tr>
                            <th scope="row">{{ $doctor->id }}</th>
                            <td>{{ $doctor->nama }}</td>
                            <td>{{ $doctor->spesialis }}</td>
                            <td>{{ $doctor->poli->nama_poli }}</td>
                            <td>
                                <form action="{{ route('dokter.destroy', $doctor->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('dokter.show', $doctor->id) }}" class="btn btn-warning text-black mx-1 my-1"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('dokter.edit', $doctor->id) }}" class="btn btn-primary text-white mx-1 my-1"><i class="fas fa-pencil-alt"></i></a>
                                    <button type="submit" class="btn btn-danger text-white mx-1 my-1" onclick="return confirm('Do you want to delete this dokter?');"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center text-danger">
                                <strong>No Dokter Found!</strong>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
            <ul class="pagination">
                <!-- Tombol "Previous" -->
                @if ($dokter->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $dokter->previousPageUrl() }}" rel="prev">Previous</a>
                    </li>
                @endif

                <!-- Tampilkan navigasi nomor untuk halaman-halaman spesifik -->
                @foreach ($dokter->getUrlRange(1, $dokter->lastPage()) as $page => $url)
                    <li class="page-item {{ $page == $dokter->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endforeach

                <!-- Tombol "Next" -->
                @if ($dokter->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $dokter->nextPageUrl() }}" rel="next">Next</a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <span class="page-link">Next</span>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
</main>
@endsection
