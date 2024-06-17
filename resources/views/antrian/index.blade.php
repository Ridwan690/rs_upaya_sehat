
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
    </tr>
