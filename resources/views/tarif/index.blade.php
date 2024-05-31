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
            <h5>Tarif List</h5>
            <a href="{{ route('tarif.create') }}" class="btn btn-primary">Tambah Tarif</a>
        </div>
        <div class="card">
            <div class="card-body">
                <table class="table">
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
                            <th scope="row">{{ $cost->id }}</th>
                            <td>{{ $cost->nama_layanan }}</td>
                            <td>{{ $cost->jenis_layanan }}</td>
                            <td>Rp {{ number_format($cost->biaya, 0, ',', '.') }}</td>
                            <td>
                                <form action="{{ route('tarif.destroy', $cost->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('tarif.show', $cost->id) }}" class="btn btn-warning text-white mx-1 my-1"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('tarif.edit', $cost->id) }}" class="btn btn-primary text-white mx-1 my-1"><i class="fas fa-pencil-alt"></i></a>
                                    <button type="submit" class="btn btn-danger text-white mx-1 my-1" onclick="return confirm('Do you want to delete this tarif?');"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center text-danger">
                                <strong>No Tarif Found!</strong>
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
        @if ($tarif->onFirstPage())
            <li class="page-item disabled">
                <span class="page-link">Previous</span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $tarif->previousPageUrl() }}" rel="prev">Previous</a>
            </li>
        @endif

        <!-- Tampilkan navigasi nomor untuk halaman-halaman spesifik -->
        @foreach ($tarif->getUrlRange(1, $tarif->lastPage()) as $page => $url)
            <li class="page-item {{ $page == $tarif->currentPage() ? 'active' : '' }}">
                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
            </li>
        @endforeach

        <!-- Tombol "Next" -->
        @if ($tarif->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $tarif->nextPageUrl() }}" rel="next">Next</a>
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
