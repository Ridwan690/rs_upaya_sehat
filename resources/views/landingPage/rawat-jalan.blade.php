@extends('layouts.master')

@section('content')

<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px">
            <h2 class="d-inline-block text-primary text-uppercase border-bottom border-5">Rawat Jalan</h2>
        </div>
            <!-- Informasi Umum -->
        <div class="my-5">
            <h3>Informasi Umum</h3>
            <p>Instalasi rawat jalan di Rumah Sakit Upaya Sehat menyediakan layanan medis yang komprehensif dan berkualitas tinggi
            untuk pasien yang memerlukan perawatan tanpa harus menginap. Kami memiliki berbagai poliklinik spesialis dan fasilitas
            diagnostik modern untuk mendukung proses pengobatan yang efektif.

            Dengan berbagai poliklinik spesialis seperti kardiologi, ortopedi, pediatri, dan dermatologi, kami memastikan bahwa
            setiap pasien mendapatkan perawatan yang tepat sesuai dengan kondisi kesehatannya. Setiap poliklinik dilengkapi dengan
            tenaga medis yang berpengalaman dan peralatan medis terkini untuk diagnosa dan perawatan yang akurat.

            Proses pendaftaran yang efisien dan sistem penjadwalan yang fleksibel memastikan bahwa pasien dapat mengakses layanan
            medis kami dengan mudah dan nyaman. Kami juga menyediakan konsultasi medis yang komprehensif, di mana dokter kami akan
            memberikan penjelasan yang jelas dan mendetail mengenai kondisi kesehatan pasien dan rencana perawatannya.

            Di Rumah Sakit Upaya Sehat, kami berkomitmen untuk memberikan pelayanan terbaik dengan fokus pada kenyamanan dan
            kesembuhan pasien. Layanan rawat jalan kami dirancang untuk memberikan perawatan yang efisien, efektif, dan berpusat
            pada pasien, memastikan setiap individu mendapatkan perawatan yang mereka butuhkan tanpa harus menginap.</p>
        </div>

        <!-- Layanan Rawat Jalan -->
        <div class="my-5">
            <h3>Layanan Rawat Jalan di RS Upaya Sehat</h3>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Poliklinik Umum</li>
                <li class="list-group-item">Poliklinik Spesialis (jantung, paru, bedah, anak, dll.)</li>
                <li class="list-group-item">Layanan Gawat Darurat 24 jam</li>
                <li class="list-group-item">Layanan Diagnostik (laboratorium, radiologi, EKG, dll.)</li>
                <li class="list-group-item">Layanan Rehabilitasi Medis</li>
                <li class="list-group-item">Layanan Konsultasi Gizi</li>
                <li class="list-group-item">Layanan Imunisasi</li>                </ul>
        </div>

        <!-- Prosedur Pelayanan Rawat Jalan -->
        <div class="my-5">
            <h3>Prosedur Pelayanan Rawat Jalan di RS Upaya Sehat</h3>
            <ol class="list-group list-group-flush">
                <li class="list-group-item">Pasien datang ke bagian pendaftaran rawat jalan dengan membawa kartu identitas
                    dan surat rujukan (jika ada).</li>
                <li class="list-group-item">Melakukan pendaftaran dan mendapatkan nomor antrian.</li>
                <li class="list-group-item">Menunggu giliran pemeriksaan sesuai dengan nomor antrian di ruang tunggu yang
                    nyaman.</li>
                <li class="list-group-item">Mengikuti pemeriksaan oleh dokter umum atau spesialis sesuai kebutuhan medis.
                </li>
                <li class="list-group-item">Jika diperlukan, pasien akan diarahkan untuk melakukan pemeriksaan penunjang
                    (laboratorium, radiologi, dll.).</li>
                <li class="list-group-item">Pasien menerima resep obat atau rujukan untuk tindakan medis lanjutan jika
                    diperlukan.</li>
                <li class="list-group-item">Pembayaran administrasi dilakukan di kasir sebelum meninggalkan rumah sakit.
                </li>
                <li class="list-group-item">Pasien dapat mengambil obat di apotek rumah sakit dengan resep yang telah
                    diberikan.</li>
            </ol>
        </div>

        <!-- Jadwal Poliklinik -->
        <div class="my-5">
            <h3>Jadwal Poliklinik</h3>
            <p>Poliklinik buka setiap hari Senin hingga Sabtu, pukul 08.00 - 16.00. Untuk jadwal dokter spesialis, silakan cek
                di bagian informasi atau hubungi call center kami.</p>
        </div>
    </div>
</div>

@endsection
