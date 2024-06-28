@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h5 class="mb-0">Detail Kunjungan</h5>
                        <a href="{{ route('kunjungan.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nomor Rekam Medis</th>
                            <td>{{ $kunjungan->rekamMedikUtama->no_rekam_medik }}</td>
                        </tr>
                        <tr>
                            <th>NIK</th>
                            <td>{{ $kunjungan->rekamMedikUtama->pasien->nik }}</td>
                        </tr>
                        <tr>
                            <th>Nama Pasien</th>
                            <td>{{ $kunjungan->rekamMedikUtama->pasien->nama }}</td>
                        </tr>
                    </table>
                    <hr>
                    <h5>Detail Kunjungan</h5>
                    <table class="table table-bordered">
                        <tr>
                            <th>Tanggal</th>
                            <td>{{ $kunjungan->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Poli</th>
                            <td>{{ $kunjungan->poli->nama_poli }}</td>
                        </tr>
                        <tr>
                            <th>Dokter</th>
                            <td>{{ $kunjungan->dokter->nama }}</td>
                        </tr>
                        <tr>
                            <th>Diagnosa</th>
                            <td>{{ $kunjungan->diagnosa ?? 'Belum ada Diagnosa' }}</td>
                        </tr>
                        <tr>
                            <th>Tindakan</th>
                            <td>{{ $kunjungan->tindakan ?? 'Belum ada Tindakan' }}</td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <a href="{{ route('kunjungan.edit', $kunjungan->id) }}" class="btn btn-warning mx-2">Edit</a>
                    <a href="{{ route('obat.print', ['jenis' => 'kunjungan', 'id' => $kunjungan->id]) }}" class="btn btn-primary mx-2">Lihat Resep</a>
                    <a href="{{ route('totalHarga', ['jenis' => 'kunjungan', 'id' => $kunjungan->id]) }}" class="btn btn-info">Rincian Biaya</a>
                </div>
            </div>
        </div>
    </div>
@endsection
