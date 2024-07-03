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
            <h5>List Pasien Rawat Inap</h5>
            <a href="{{ route('rawat-inap.create') }}" class="btn btn-success"><i class="fas fa-plus-circle"></i> Daftar Rawat Inap</a>
        </div>
        <div class="card">
            <div class="table-responsive"
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">S#</th>
                            <th scope="col">Nama Pasien</th>
                            <th scope="col">Kamar</th>
                            <th scope="col">Tanggal Inap</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($rawatInap as $rawat)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $rawat->rekammedik->pasien->nama }}</td>
                            <td>{{ $rawat->kamar->kode_kamar }}</td>
                            <td>{{ $rawat->tanggal_masuk }}</td>
                            <td>
                                <form action="{{ route('rawat-inap.destroy', $rawat->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('rawat-inap.show', $rawat->id) }}" class="btn btn-warning text-black mx-1 my-1"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('rawat-inap.edit', $rawat->id) }}" class="btn btn-primary text-white mx-1 my-1"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{ route('rawat-inap.printBracelet', $rawat->id) }}" target="_blank" class="btn btn-info text-white mx-1 my-1"><i
                                            class="fas fa-print"></i></a>
                                    <button type="submit" class="btn btn-danger text-white mx-1 my-1" onclick="return confirm('Do you want to delete this rawat-inap?');"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center text-danger">
                                <strong>No Daftar Rawat Jalan Found!</strong>
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
        @if ($rawatInap->onFirstPage())
        <li class="page-item disabled">
            <span class="page-link">Previous</span>
        </li>
        @else
        <li class="page-item">
            <a class="page-link" href="{{ $rawatInap->previousPageUrl() }}" rel="prev">Previous</a>
        </li>
        @endif

        <!-- Tampilkan navigasi nomor untuk halaman-halaman spesifik -->
        @php
        $current = $rawatInap->currentPage();
        $last = $rawatInap->lastPage();
        $start = $current > 2 ? $current - 2 : 1;
        $end = $current < $last - 2 ? $current + 2 : $last; @endphp @if ($start> 1)
            <li class="page-item">
                <a class="page-link" href="{{ $rawatInap->url(1) }}">1</a>
            </li>
            @if ($start > 2)
            <li class="page-item disabled">
                <span class="page-link">...</span>
            </li>
            @endif
            @endif

            @for ($page = $start; $page <= $end; $page++) <li class="page-item {{ $page == $current ? 'active' : '' }}">
                <a class="page-link" href="{{ $rawatInap->url($page) }}">{{ $page }}</a>
                </li>
                @endfor

                @if ($end < $last) @if ($end < $last - 1) <li class="page-item disabled">
                    <span class="page-link">...</span>
                    </li>
                    @endif
                    <li class="page-item">
                        <a class="page-link" href="{{ $rawatInap->url($last) }}">{{ $last }}</a>
                    </li>
                    @endif

                    <!-- Tombol "Next" -->
                    @if ($rawatInap->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $rawatInap->nextPageUrl() }}" rel="next">Next</a>
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
