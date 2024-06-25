@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-center mt-3">
    <div class="w-75">
        <div class="card">
            <div class="card-header justify-content-between d-flex">
                <h3>Rincian Biaya</h3>
                <a href="" class="btn btn-primary">Download PDF</a>
            </div>
            <div class="card-body">
                <h4>Informasi Pasien</h4>
                 <table class="table table-bordered">
                    <tr>
                        <th>Nomor Rekam Medis</th>
                        <td>{{ $entity->rekammedik->no_rekam_medik ?? $entity->rekamMedikUtama->no_rekam_medik }}</td>
                    </tr>
                    <tr>
                        <th>Nama Pasien</th>
                        <td>{{ $entity->rekammedik->pasien->nama ?? $entity->rekamMedikUtama->pasien->nama }}</td>
                    </tr>
                    <tr>
                        <th>Kunjungan Tanggal</th>
                        <td>{{ $entity->created_at }}</td>
                    </tr>
                </table>
                <h4>Layanan</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama Layanan</th>
                            <th>Harga (Rp)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($entity->tarif as $tarif)
                        <tr>
                            <td>{{ $tarif->nama_layanan }} - {{ $tarif->jenis_layanan }}</td>
                            <td>{{ number_format($tarif->biaya, 0, ',', '.') }}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td class="justify-content-end d-flex"><b>Total :</b></td>
                            <td><b>{{ number_format($totalHargaTarif, 0, ',', '.') }}</b></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <h4>Obat</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama Obat</th>
                            <th>Harga (Rp)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($entity->obat as $obat)
                        <tr>
                            <td>{{ $obat->nama_obat }}</td>
                            <td>{{ number_format($obat->harga, 0, ',', '.') }}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td class="justify-content-end d-flex"><b>Total :</b></td>
                            <td><b>{{ number_format($totalHargaObat, 0, ',', '.') }}</b></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <h3>Total Harga: Rp {{ number_format($totalHarga, 0, ',', '.') }},-</h3>
            </div>
        </div>
    </div>
</div>
@endsection
