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
            <h5>List Pasien Rawat Jalan</h5>
            <a href="{{ route('rawat-jalan.create') }}" class="btn btn-success"><i class="fas fa-plus-circle"></i> Tambah Daftar Rawat Jalan</a>
        </div>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">S#</th>
                            <th scope="col">Nama Pasien</th>
                            <th scope="col">Poli</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($rawatJalan as $rawat)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $rawat->kunjungan->rekamMedikUtama->pasien->nama }}</td>
                            <td>{{ $rawat->kunjungan->poli->nama_poli }}</td>
                            <td>{{ $rawat->tanggal }}</td>
                            <td>
                                <form action="{{ route('rawat-jalan.destroy', $rawat->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('rawat-jalan.show', $rawat->id) }}" class="btn btn-warning text-black mx-1 my-1"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('rawat-jalan.edit', $rawat->id) }}" class="btn btn-primary text-white mx-1 my-1"><i class="fas fa-pencil-alt"></i></a>
                                    <button type="submit" class="btn btn-danger text-white mx-1 my-1" onclick="return confirm('Do you want to delete this rawat-jalan?');"><i class="fas fa-trash-alt"></i></button>
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
        <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
            <ul class="pagination">
                <!-- Tombol "Previous" -->
                @if ($rawatJalan->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $rawatJalan->previousPageUrl() }}" rel="prev">Previous</a>
                    </li>
                @endif

                <!-- Tampilkan navigasi nomor untuk halaman-halaman spesifik -->
                @foreach ($rawatJalan->getUrlRange(1, $rawatJalan->lastPage()) as $page => $url)
                    <li class="page-item {{ $page == $rawatJalan->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endforeach

                <!-- Tombol "Next" -->
                @if ($rawatJalan->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $rawatJalan->nextPageUrl() }}" rel="next">Next</a>
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
