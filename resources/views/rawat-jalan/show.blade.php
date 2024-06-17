@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h5 class="mb-0">Detail Rawat Jalan</h5>
                        <a href="{{ route('rawat-jalan.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nomor Rekam Medis</th>
                            <td>{{ $rawatJalan->rekammedik->no_rekam_medik }}</td>
                        </tr>
                        <tr>
                            <th>NIK</th>
                            <td>{{ $rawatJalan->rekammedik->pasien->nik }}</td>
                        </tr>
                        <tr>
                            <th>Nama Pasien</th>
                            <td>{{ $rawatJalan->rekammedik->pasien->nama }}</td>
                        </tr>
                    </table>
                    <hr>
                    <h5>Detail Kunjungan</h5>
                    <table class="table table-bordered">
                        <tr>
                            <th>Tanggal</th>
                            <td>{{ $rawatJalan->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Kunjungan</th>
                            <td>{{ $rawatJalan->kunjungan_count }}</td>
                        </tr>
                        <tr>
                            <th>Poli</th>
                            <td>{{ $rawatJalan->antrian->poli->nama_poli }}</td>
                        </tr>
                        <tr>
                            <th>Dokter</th>
                            <td>{{ $rawatJalan->antrian->dokter->nama }}</td>
                        </tr>
                        <tr>
                            <th>Catatan</th>
                            <td>{{ $rawatJalan->catatan ?? 'Tidak ada Catatan' }}</td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <a href="{{ route('rawat-jalan.edit', $rawatJalan->id) }}" class="btn btn-warning mx-2">Edit</a>
                </div>
            </div>
        </div>
    </div>
@endsection
