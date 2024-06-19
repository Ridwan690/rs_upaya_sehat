{{-- 
    <tr>
        <td>{{ $rawatJalan->kunjungan->rekamMedik->no_rekam_medik }}</td>
        <td>{{ $rawatJalan->kunjungan->rekamMedik->pasien->nik }}</td>
        <td>{{ $rawatJalan->kunjungan->rekamMedik->pasien->nama }}</td>
        <td>{{ $rawatJalan->kunjungan->poli->nama_poli }}</td>
        <td>{{ $rawatJalan->kunjungan->dokter->nama }}</td>
        <td>{{ $rawatJalan->kunjungan_count }}</td>
        <td>{{ $rawatJalan->kunjungan->antrian->no_antrian }}</td>
        <td>{{ $rawatJalan->kunjungan->antrian->pasien->nik }}</td>
        <td>{{ $rawatJalan->kunjungan->antrian->pasien->nama }}</td>
    </tr> --}}
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
                <h5>List Antrian Pasien</h5>
                {{-- <a href="{{ route('rawat-jalan.create') }}" class="btn btn-success"><i class="fas fa-plus-circle"></i> Tambah Daftar Rawat Jalan</a> --}}
            </div>
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">S#</th>
                                <th scope="col">Poli</th>
                                <th scope="col">Dokter</th>
                                <th scope="col">Kode Antrian</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($antrian as $queue)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $queue->poli->nama_poli }}</td>
                                <td>{{ $queue->dokter->nama }}</td>
                                <td>{{ $queue->kode_antrian }}</td>
                                <td>
                                    {{-- <a href="{{ route('antrian.show', $queue->id) }}" class="btn btn-warning text-black mx-1 my-1"><i class="fas fa-eye"></i></a> --}}
                                    {{-- <a href="{{ route('antrian.edit', $queue->id) }}" class="btn btn-primary text-white mx-1 my-1"><i class="fas fa-pencil-alt"></i></a> --}}
                                    <a href="{{ route('antrian.print', $queue->id) }}" target="_blank" class="btn btn-info text-white mx-1 my-1"><i class="fas fa-print"></i></a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center text-danger">
                                    <strong>No Antrian Pasien Found!</strong>
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
                    @if ($antrian->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link">Previous</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $antrian->previousPageUrl() }}" rel="prev">Previous</a>
                        </li>
                    @endif
    
                    <!-- Tampilkan navigasi nomor untuk halaman-halaman spesifik -->
                    @foreach ($antrian->getUrlRange(1, $antrian->lastPage()) as $page => $url)
                        <li class="page-item {{ $page == $antrian->currentPage() ? 'active' : '' }}">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach
    
                    <!-- Tombol "Next" -->
                    @if ($antrian->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $antrian->nextPageUrl() }}" rel="next">Next</a>
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
    