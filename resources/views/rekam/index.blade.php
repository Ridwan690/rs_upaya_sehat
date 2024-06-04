@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-center mt-3 px-5">
        <div class="w-100">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h5 class="mb-0">Rekam Medik</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">S#</th>
                                    <th scope="col">Nomor Rekam Medis</th>
                                    <th scope="col">NIK</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Kunjungan Terakhir</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($rekamMedik as $rm)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $rm->no_rekam_medik }}</td>
                                    <td>{{ $rm->pasien->nik }}</td>
                                    <td>{{ $rm->pasien->nama }}</td>
                                    <td>{{ $rm->created_at }}</td>
                                    <td>
                                        <a href="{{ route('rekam.show', $rm->id) }}" class="btn btn-warning btn-sm mx-1"><i class="fas fa-eye"></i></a>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="text-center text-danger">
                                            <strong>No Pasien Found!</strong>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    {{ $rekamMedik->links() }}
                </div>
            </div>
            <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
                <ul class="pagination">
                    <!-- Tombol "Previous" -->
                    @if ($rekamMedik->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link">Previous</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $rekamMedik->previousPageUrl() }}" rel="prev">Previous</a>
                        </li>
                    @endif

                    <!-- Tampilkan navigasi nomor untuk halaman-halaman spesifik -->
                    @foreach ($rekamMedik->getUrlRange(1, $rekamMedik->lastPage()) as $page => $url)
                        <li class="page-item {{ $page == $rekamMedik->currentPage() ? 'active' : '' }}">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach

                    <!-- Tombol "Next" -->
                    @if ($rekamMedik->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $rekamMedik->nextPageUrl() }}" rel="next">Next</a>
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
