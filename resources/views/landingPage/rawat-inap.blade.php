@extends('layouts.master')

@section('content')

<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px">
            <h2 class="d-inline-block text-primary text-uppercase border-bottom border-5">Rawat Inap</h2>
        </div>
            <!-- Informasi Umum -->
            <div class="my-5">
                <h3>Informasi Umum</h3>
                <p>Instalasi rawat inap di Rumah Sakit Upaya Sehat menyediakan fasilitas dan pelayanan medis yang komprehensif untuk pasien
                dengan berbagai kondisi kesehatan. Kami memiliki tim medis yang profesional dan fasilitas yang modern untuk memastikan
                kenyamanan dan kesembuhan pasien.

                Dengan berbagai jenis kamar mulai dari VIP hingga kelas 3, kami menyediakan lingkungan yang nyaman sesuai dengan
                kebutuhan dan preferensi setiap pasien. Setiap kamar dilengkapi dengan fasilitas yang mendukung, seperti AC, televisi,
                dan kamar mandi pribadi atau bersama, untuk memastikan kenyamanan selama masa perawatan.

                Tim medis kami terdiri dari dokter spesialis berpengalaman dan perawat terlatih yang siap memberikan perawatan 24 jam.
                Selain itu, kami juga menyediakan fasilitas pendukung seperti laboratorium untuk pemeriksaan diagnostik, layanan
                radiologi termasuk rontgen dan CT-scan, serta apotek yang menyediakan obat-obatan yang dibutuhkan pasien.

                Kami mengutamakan proses pendaftaran yang mudah dan cepat, mulai dari registrasi, konsultasi dokter, hingga penyelesaian
                administrasi. Hal ini memastikan bahwa pasien dapat segera mendapatkan perawatan yang diperlukan tanpa hambatan yang
                berarti.

                Di Rumah Sakit Upaya Sehat, kami berkomitmen untuk memberikan pelayanan terbaik dengan fokus pada kesembuhan dan
                kesejahteraan pasien. Fasilitas yang lengkap dan modern, ditambah dengan tenaga medis yang ahli, menjadikan kami pilihan
                utama untuk kebutuhan rawat inap Anda.</p>
            </div>


                <!-- Layanan Rawat Inap -->
            <div class="my-5">
                <h3>Layanan Rawat Inap di RS Upaya Sehat</h3>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Visite dokter yang merawat minimum 2x sehari.</li>
                    <li class="list-group-item">Konsultasi dengan dokter spesialis sesuai kebutuhan medis.</li>
                    <li class="list-group-item">Pemberian obat-obatan sesuai resep medis.</li>
                        <li class="list-group-item">Tindakan medis sesuai indikasi.</li>
                </ul>
            </div>


            <!-- Prosedur Pelayanan Rawat Inap -->
            <div class="my-5">
                <h3>Prosedur Pelayanan Rawat Inap di RS Upaya Sehat</h3>
                <ol class="list-group list-group-flush">
                    <li class="list-group-item">Pasien yang memerlukan rawat inap akan mendapatkan surat perintah rawat inap
                        dari dokter spesialis atau dari IGD.</li>
                    <li class="list-group-item">Pasien atau keluarga pasien mengkonfirmasi ruangan rawat inap di bagian
                        pendaftaran.</li>
                    <li class="list-group-item">Bagian pendaftaran rawat inap akan menerbitkan Surat Keterangan Perawatan RS
                        Upaya Sehat.</li>
                    <li class="list-group-item">Pasien/keluarga pasien memilih ruang perawatan yang diinginkan sesuai ketentuan
                        instansi penjamin.</li>
                    <li class="list-group-item">Jika diperlukan pemeriksaan diagnostik atau tindakan medis lanjutan, pasien
                        harus menandatangani Surat Persetujuan Tindakan Medis.</li>
                    <li class="list-group-item">Setelah selesai rawat inap, pasien atau keluarga menandatangani Surat Bukti
                        Rawat Inap dan mendapatkan jadwal kontrol kembali ke dokter spesialis.</li>
                    <li class="list-group-item">Pasien akan membawa surat perintah kontrol untuk mendapatkan Surat Rujukan ke
                        dokter spesialis yang ditunjuk.</li>
                </ol>
            </div>
    </div>
</div>

@endsection
