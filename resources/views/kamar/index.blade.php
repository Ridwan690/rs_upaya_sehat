@extends('layouts.admin')

@section('content')
<main class="content px-3 py-2">
    <div class="container-fluid">
        @if ($message = Session::get('success'))
            <div class="alert alert-success mb-3">
                {{ $message }}
            </div>
        @endif
        @if ($message = Session::get('warning'))
            <div class="alert alert-warning mb-3">
                {{ $message }}
            </div>
        @endif
        <div class="mb-3 d-flex align-items-center justify-content-between">
            <h5>Dokter List</h5>
            <a href="{{ route('kamar.create') }}" class="btn btn-success"><i class="fas fa-plus-circle"></i> Tambah Kamar</a>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">S#</th>
                                <th scope="col">Kode Kamar</th>
                                <th scope="col">Tipe Kamar</th>
                                <th scope="col">Kapasitas</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($kamar as $room)
                            <tr>
                                <th scope="row">{{ $room->id }}</th>
                                <td>{{ $room->kode_kamar }}</td>
                                <td>{{ $room->tipe_kamar }}</td>
                                <td>{{ $room->kapasitas }} ranjang</td>
                                <td>
                                    <form action="{{ route('kamar.destroy', $room->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('kamar.show', $room->id) }}" class="btn btn-warning text-black mx-1 my-1"><i class="fas fa-eye"></i></a>
                                        <a href="{{ route('kamar.edit', $room->id) }}" class="btn btn-primary text-white mx-1 my-1"><i class="fas fa-pencil-alt"></i></a>
                                        <button type="submit" class="btn btn-danger text-white mx-1 my-1" onclick="return confirm('Do you want to delete this kamar?');"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center text-danger">
                                    <strong>Tidak ada kamar!</strong>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
<nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
    <ul class="pagination">
        <!-- Tombol "Previous" -->
        @if ($kamar->onFirstPage())
        <li class="page-item disabled">
            <span class="page-link">Previous</span>
        </li>
        @else
        <li class="page-item">
            <a class="page-link" href="{{ $kamar->previousPageUrl() }}" rel="prev">Previous</a>
        </li>
        @endif

        <!-- Tampilkan navigasi nomor untuk halaman-halaman spesifik -->
        @php
        $current = $kamar->currentPage();
        $last = $kamar->lastPage();
        $start = $current > 2 ? $current - 2 : 1;
        $end = $current < $last - 2 ? $current + 2 : $last; @endphp @if ($start> 1)
            <li class="page-item">
                <a class="page-link" href="{{ $kamar->url(1) }}">1</a>
            </li>
            @if ($start > 2)
            <li class="page-item disabled">
                <span class="page-link">...</span>
            </li>
            @endif
            @endif

            @for ($page = $start; $page <= $end; $page++) <li class="page-item {{ $page == $current ? 'active' : '' }}">
                <a class="page-link" href="{{ $kamar->url($page) }}">{{ $page }}</a>
                </li>
                @endfor

                @if ($end < $last) @if ($end < $last - 1) <li class="page-item disabled">
                    <span class="page-link">...</span>
                    </li>
                    @endif
                    <li class="page-item">
                        <a class="page-link" href="{{ $kamar->url($last) }}">{{ $last }}</a>
                    </li>
                    @endif

                    <!-- Tombol "Next" -->
                    @if ($kamar->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $kamar->nextPageUrl() }}" rel="next">Next</a>
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
