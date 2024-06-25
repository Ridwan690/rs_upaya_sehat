@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-center mt-3">
        <div class="w-75">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Detail Rawat Inap</h5>
                    <a href="{{ route('rawat-inap.index') }}" class="btn btn-primary">
                        &larr; Back
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>NIK</th>
                            <td>{{ $rawatInap->rekammedik->pasien->nik }}</td>
                        </tr>
                        <tr>
                            <th>Nama Pasien</th>
                            <td>{{ $rawatInap->rekammedik->pasien->nama }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Masuk</th>
                            <td>{{ $rawatInap->tanggal_masuk }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Keluar</th>
                            <td>{{ $rawatInap->tanggal_keluar ?? 'Belum Keluar' }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>{{ $rawatInap->status }}</td>
                        </tr>
                        <tr>
                            <th>Kamar</th>
                            <td>{{ $rawatInap->kamar->kode_kamar }} ({{ $rawatInap->kamar->tipe_kamar }})</td>
                        </tr>
                        <tr>
                            <th>Catatan</th>
                            <td>{{ $rawatInap->catatan ?? 'Tidak Ada Catatan' }}</td>
                        </tr>
                    </table>
                    <div class="d-flex justify-content-end mt-4">
                        <a href="{{ route('rawat-inap.edit', $rawatInap->id) }}" class="btn btn-warning me-2">
                            Update
                        </a>
                        <a href="{{ route('totalHarga', ['jenis' => 'rawat_inap', 'id' => $rawatInap->id]) }}" class="btn btn-info">
                            Rincian Biaya
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
