@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h5 class="mb-0">Detail Rekam Medik</h5>
                        <a href="{{ route('rekam.printPatientCard', $rekamMedik->id) }}" target="_blank" class="btn btn-primary"> Cetak Kartu Pasien</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="no_rm" class="col-sm-3 col-form-label"><strong>Nomor Rekam Medis:</strong></label>
                        <div class="col-sm-9">
                            <p class="form-control-plaintext">{{ $rekamMedik->no_rekam_medik }}</p>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nik" class="col-sm-3 col-form-label"><strong>NIK:</strong></label>
                        <div class="col-sm-9">
                            <p class="form-control-plaintext">{{ $rekamMedik->pasien->nik }}</p>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama_pasien" class="col-sm-3 col-form-label"><strong>Nama Pasien:</strong></label>
                        <div class="col-sm-9">
                            <p class="form-control-plaintext">{{ $rekamMedik->pasien->nama }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm mt-3">
                <div class="card-body">
                    <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="detail-kunjungan-tab" data-bs-toggle="tab" data-bs-target="#detail-kunjungan" type="button" role="tab" aria-controls="detail-kunjungan" aria-selected="true">Detail Kunjungan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="rawat-jalan-tab" data-bs-toggle="tab" data-bs-target="#rawat-jalan" type="button" role="tab" aria-controls="rawat-jalan" aria-selected="false">Rawat Jalan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="rawat-inap-tab" data-bs-toggle="tab" data-bs-target="#rawat-inap" type="button" role="tab" aria-controls="rawat-inap" aria-selected="false">Rawat Inap</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <!-- Tab pane for Detail Kunjungan -->
                        <div class="tab-pane fade show active" id="detail-kunjungan" role="tabpanel" aria-labelledby="detail-kunjungan-tab">
                            @foreach ($rekamMedik->kunjungan as $kunjungan)
                                <div class="mb-3 row">
                                    <label for="tanggal_kunjungan" class="col-sm-3 col-form-label"><strong>Tanggal Kunjungan:</strong></label>
                                    <div class="col-sm-9">
                                        <p class="form-control-plaintext">{{ $kunjungan->tanggal }}</p>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="poli" class="col-sm-3 col-form-label"><strong>Poli:</strong></label>
                                    <div class="col-sm-9">
                                        <p class="form-control-plaintext">{{ $kunjungan->poli->nama_poli }}</p>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="dokter" class="col-sm-3 col-form-label"><strong>Dokter:</strong></label>
                                    <div class="col-sm-9">
                                        <p class="form-control-plaintext">{{ $kunjungan->dokter->nama }}</p>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="diagnosa" class="col-sm-3 col-form-label"><strong>Diagnosa:</strong></label>
                                    <div class="col-sm-9">
                                        <p class="form-control-plaintext">{{ $kunjungan->diagnosa ?? 'Belum ada diagnosa' }}</p>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="tindakan" class="col-sm-3 col-form-label"><strong>Tindakan:</strong></label>
                                    <div class="col-sm-9">
                                        <p class="form-control-plaintext">{{ $kunjungan->tindakan ?? 'Belum ada tindakan'}}</p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('rekam.edit', $kunjungan->id) }}" class="btn btn-primary btn-sm mx-1"><i class="fas fa-pencil-alt"></i></a>

                                </div>
                                <hr>
                            @endforeach
                        </div>

                        <!-- Tab pane for Rawat Jalan -->
                        <div class="tab-pane fade" id="rawat-jalan" role="tabpanel" aria-labelledby="rawat-jalan-tab">
                            @foreach ($rawatJalan as $rawat)
                                <div class="mb-3 row">
                                    <label for="tanggal_rawat_jalan" class="col-sm-3 col-form-label"><strong>Tanggal Rawat Jalan:</strong></label>
                                    <div class="col-sm-9">
                                        <p class="form-control-plaintext">{{ $rawat->created_at }}</p>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="tanggal_rawat_jalan" class="col-sm-3 col-form-label"><strong>Poli:</strong></label>
                                    <div class="col-sm-9">
                                        <p class="form-control-plaintext">{{ $rawat->antrian->poli->nama_poli }}</p>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="tanggal_rawat_jalan" class="col-sm-3 col-form-label"><strong>Dokter:</strong></label>
                                    <div class="col-sm-9">
                                        <p class="form-control-plaintext">{{ $rawat->antrian->dokter->nama }}</p>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="status_rawat_jalan" class="col-sm-3 col-form-label"><strong>Kunjungan ke:</strong></label>
                                    <div class="col-sm-9">
                                        <p class="form-control-plaintext">{{ $rawat->kunjungan_count }}</p>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="catatan_rawat_jalan" class="col-sm-3 col-form-label"><strong>Catatan:</strong></label>
                                    <div class="col-sm-9">
                                        <p class="form-control-plaintext">{{ $rawat->catatan ?? 'Belum ada catatan' }}</p>
                                    </div>
                                </div>
                                <hr>
                            @endforeach
                        </div>


                        <!-- Tab pane for Rawat Inap -->
                        <div class="tab-pane fade" id="rawat-inap" role="tabpanel" aria-labelledby="rawat-inap-tab">
                            @foreach ($rekamMedik->rawatInap as $rawatInap)
                                <div class="mb-3 row">
                                    <label for="tanggal_masuk_rawat_inap" class="col-sm-3 col-form-label"><strong>Tanggal Masuk Rawat Inap:</strong></label>
                                    <div class="col-sm-9">
                                        <p class="form-control-plaintext">{{ $rawatInap->tanggal_masuk }}</p>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="tanggal_keluar_rawat_inap" class="col-sm-3 col-form-label"><strong>Tanggal Keluar Rawat Inap:</strong></label>
                                    <div class="col-sm-9">
                                        <p class="form-control-plaintext">{{ $rawatInap->tanggal_keluar ?? '-' }}</p>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="status_rawat_inap" class="col-sm-3 col-form-label"><strong>Status:</strong></label>
                                    <div class="col-sm-9">
                                        <p class="form-control-plaintext">{{ $rawatInap->status }}</p>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="catatan_rawat_inap" class="col-sm-3 col-form-label"><strong>Catatan:</strong></label>
                                    <div class="col-sm-9">
                                        <p class="form-control-plaintext">{{ $rawatInap->catatan ?? 'Belum ada catatan' }}</p>
                                    </div>
                                </div>
                                <hr>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <a href="{{ route('rekam.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
