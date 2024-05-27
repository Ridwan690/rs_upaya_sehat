<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TarifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tarifs = [
            // Pendaftaran dan Administrasi
            [
                'nama_layanan' => 'Pendaftaran dan Administrasi',
                'jenis_layanan' => 'Pendaftaran Rawat Jalan',
                'biaya' => 9000,
            ],
            [
                'nama_layanan' => 'Pendaftaran dan Administrasi',
                'jenis_layanan' => 'Pendaftaran Rawat Inap',
                'biaya' => 13500,
            ],
            [
                'nama_layanan' => 'Pendaftaran dan Administrasi',
                'jenis_layanan' => 'Pendaftaran Gawat Darurat',
                'biaya' => 9000,
            ],
            [
                'nama_layanan' => 'Pendaftaran dan Administrasi',
                'jenis_layanan' => 'Administrasi Lainnya',
                'biaya' => 27000,
            ],

            // Akomodasi
            [
                'nama_layanan' => 'Akomodasi',
                'jenis_layanan' => 'Kelas II',
                'biaya' => 126000,
            ],
            [
                'nama_layanan' => 'Akomodasi',
                'jenis_layanan' => 'Intensive Care Unit (ICU)',
                'biaya' => 258750,
            ],
            [
                'nama_layanan' => 'Akomodasi',
                'jenis_layanan' => 'Intermediate Care Unit (IMCU)/HCU',
                'biaya' => 270000,
            ],
            [
                'nama_layanan' => 'Akomodasi',
                'jenis_layanan' => 'Isolasi',
                'biaya' => 142000,
            ],
            [
                'nama_layanan' => 'Akomodasi',
                'jenis_layanan' => 'Neonatal Intensive Care Unit (NICU)',
                'biaya' => 225000,
            ],
            [
                'nama_layanan' => 'Akomodasi',
                'jenis_layanan' => ' Ruang Bayi',
                'biaya' => 67500,
            ],
            [
                'nama_layanan' => 'Akomodasi',
                'jenis_layanan' => 'Inkubator',
                'biaya' => 72000,
            ],
            [
                'nama_layanan' => 'Akomodasi',
                'jenis_layanan' => 'Kamar Bedah',
                'biaya' => 495000,
            ],

            // Visite, Pemeriksaan, Konsultasi, dan Konseling
            // Visite
            [
                'nama_layanan' => 'Visite',
                'jenis_layanan' => 'Dokter Umum',
                'biaya' => 22500,
            ],
            [
                'nama_layanan' => 'Visite',
                'jenis_layanan' => 'Dokter Spesialis',
                'biaya' => 67500,
            ],
            [
                'nama_layanan' => 'Visite',
                'jenis_layanan' => 'Dokter Sub Spesialis',
                'biaya' => 74250,
            ],

            // Visite, Pemeriksaan, Konsultasi, dan Konseling
            // Pemeriksaan
            [
                'nama_layanan' => 'Pemeriksaan',
                'jenis_layanan' => 'Dokter Umum',
                'biaya' => 22500,
            ],
            [
                'nama_layanan' => 'Pemeriksaan',
                'jenis_layanan' => 'Dokter Spesialis',
                'biaya' => 54000,
            ],
            [
                'nama_layanan' => 'Pemeriksaan',
                'jenis_layanan' => 'Dokter Sub Spesialis',
                'biaya' => 67500,
            ],

            // Visite, Pemeriksaan, Konsultasi, dan Konseling
            // Konstultasi
            [
                'nama_layanan' => 'Konsultasi',
                'jenis_layanan' => 'Gizi',
                'biaya' => 18000,
            ],

            // Visite, Pemeriksaan, Konsultasi, dan Konseling
            // Konseling
            [
                'nama_layanan' => 'Konseling',
                'jenis_layanan' => null,
                'biaya' => 14400,
            ],

            // Tindakan Medis
            // Tindakan Medik Non-Operatif
            [
                'nama_layanan' => 'Tindakan Medik Non-Operatif ',
                'jenis_layanan' => 'Tindakan Kecil',
                'biaya' => 4500,
            ],
            [
                'nama_layanan' => 'Tindakan Medik Non-Operatif ',
                'jenis_layanan' => 'Tindakan Sedang',
                'biaya' => 40500,
            ],
            [
                'nama_layanan' => 'Tindakan Medik Non-Operatif ',
                'jenis_layanan' => 'Tindakan Besar',
                'biaya' => 2835000,
            ],
            [
                'nama_layanan' => 'Tindakan Medik Non-Operatif ',
                'jenis_layanan' => 'Tindakan Khusus',
                'biaya' => 8100000,
            ],

            // Tindakan Medis
            // Tindakan Medik Operatif
            // Bedah Gigi dan Mulut
            [
                'nama_layanan' => 'Bedah Gigi dan Mulut',
                'jenis_layanan' => 'Kecil',
                'biaya' => 540000,
            ],
            [
                'nama_layanan' => 'Bedah Gigi dan Mulut',
                'jenis_layanan' => 'Sedang',
                'biaya' => 2268000,
            ],
            [
                'nama_layanan' => 'Bedah Gigi dan Mulut',
                'jenis_layanan' => 'Besar',
                'biaya' => 5467500,
            ],
            [
                'nama_layanan' => 'Bedah Gigi dan Mulut',
                'jenis_layanan' => 'Khusus',
                'biaya' => 16591000,
            ],

            // Tindakan Medis
            // Tindakan Medik Operatif
            // Bedah Umum
            [
                'nama_layanan' => 'Bedah Umum',
                'jenis_layanan' => 'Kecil',
                'biaya' => 529000,
            ],
            [
                'nama_layanan' => 'Bedah Umum',
                'jenis_layanan' => 'Sedang',
                'biaya' => 3240000,
            ],
            [
                'nama_layanan' => 'Bedah Umum',
                'jenis_layanan' => 'Besar',
                'biaya' => 7371000,
            ],
            [
                'nama_layanan' => 'Bedah Umum',
                'jenis_layanan' => 'Khusus',
                'biaya' => 11664000,
            ],

            // Tindakan Medis
            // Tindakan Medik Operatif
            // Bedah Jantung dan Thorax Cardio Vasculer
            [
                'nama_layanan' => 'Bedah Jantung dan Thorax Cardio Vasculer',
                'jenis_layanan' => 'Kecil',
                'biaya' => 1323000,
            ],
            [
                'nama_layanan' => 'Bedah Jantung dan Thorax Cardio Vasculer',
                'jenis_layanan' => 'Sedang',
                'biaya' => 247500,
            ],
            [
                'nama_layanan' => 'Bedah Jantung dan Thorax Cardio Vasculer',
                'jenis_layanan' => 'Besar',
                'biaya' => 8100000,
            ],
            [
                'nama_layanan' => 'Bedah Jantung dan Thorax Cardio Vasculer',
                'jenis_layanan' => 'Khusus',
                'biaya' => 19440000,
            ],

            // Tindakan Medis
            // Tindakan Medik Operatif
            // Bedah Digestive
            [
                'nama_layanan' => 'Bedah Digestive',
                'jenis_layanan' => 'Kecil',
                'biaya' => 540000,
            ],
            [
                'nama_layanan' => 'Bedah Digestive',
                'jenis_layanan' => 'Sedang',
                'biaya' => 3240000,
            ],
            [
                'nama_layanan' => 'Bedah Digestive',
                'jenis_layanan' => 'Besar',
                'biaya' => 8100000,
            ],
            [
                'nama_layanan' => 'Bedah Digestive',
                'jenis_layanan' => 'Khusus',
                'biaya' => 16200000,
            ],

            // Tindakan Medis
            // Tindakan Medik Operatif
            // Bedah Tumor/ Onkologi
            [
                'nama_layanan' => 'Bedah Tumor/ Onkologi',
                'jenis_layanan' => 'Kecil',
                'biaya' => 693000,
            ],
            [
                'nama_layanan' => 'Bedah Tumor/ Onkologi',
                'jenis_layanan' => 'Sedang',
                'biaya' => 2835000,
            ],
            [
                'nama_layanan' => 'Bedah Tumor/ Onkologi',
                'jenis_layanan' => 'Besar',
                'biaya' => 11061000,
            ],
            [
                'nama_layanan' => 'Bedah Tumor/ Onkologi',
                'jenis_layanan' => 'Khusus',
                'biaya' => 12476000,
            ],

            // Tindakan Medis
            // Tindakan Medik Operatif
            // Bedah Anak
            [
                'nama_layanan' => 'Bedah Anak',
                'jenis_layanan' => 'Kecil',
                'biaya' => 693000,
            ],
            [
                'nama_layanan' => 'Bedah Anak',
                'jenis_layanan' => 'Sedang',
                'biaya' => 2268000,
            ],
            [
                'nama_layanan' => 'Bedah Anak',
                'jenis_layanan' => 'Besar',
                'biaya' => 9234000,
            ],
            [
                'nama_layanan' => 'Bedah Anak',
                'jenis_layanan' => 'Khusus',
                'biaya' => 16767000,
            ],

            // Tindakan Medis
            // Tindakan Medik Operatif
            // Bedah Urologi
            [
                'nama_layanan' => 'Bedah Urologi',
                'jenis_layanan' => 'Kecil',
                'biaya' => 990000,
            ],
            [
                'nama_layanan' => 'Bedah Urologi',
                'jenis_layanan' => 'Sedang',
                'biaya' => 2928000,
            ],
            [
                'nama_layanan' => 'Bedah Urologi',
                'jenis_layanan' => 'Besar',
                'biaya' => 5638000,
            ],
            [
                'nama_layanan' => 'Bedah Urologi',
                'jenis_layanan' => 'Khusus',
                'biaya' => 7456000,
            ],

            // Tindakan Medis
            // Tindakan Medik Operatif
            // Bedah Ortopedi dan Traumatologi
            [
                'nama_layanan' => 'Bedah Ortopedi dan Traumatologi',
                'jenis_layanan' => 'Kecil',
                'biaya' => 529000,
            ],
            [
                'nama_layanan' => 'Bedah Ortopedi dan Traumatologi',
                'jenis_layanan' => 'Sedang',
                'biaya' => 8424000,
            ],
            [
                'nama_layanan' => 'Bedah Ortopedi dan Traumatologi',
                'jenis_layanan' => 'Besar',
                'biaya' => 14904000,
            ],
            [
                'nama_layanan' => 'Bedah Ortopedi dan Traumatologi',
                'jenis_layanan' => 'Khusus',
                'biaya' => 20979000,
            ],

            // Tindakan Medis
            // Tindakan Medik Operatif
            // Bedah Saraf
            [
                'nama_layanan' => 'Bedah Saraf',
                'jenis_layanan' => 'Kecil',
                'biaya' => 472500,
            ],
            [
                'nama_layanan' => 'Bedah Saraf',
                'jenis_layanan' => 'Sedang',
                'biaya' => 9137000,
            ],
            [
                'nama_layanan' => 'Bedah Saraf',
                'jenis_layanan' => 'Besar',
                'biaya' => 24319000,
            ],
            [
                'nama_layanan' => 'Bedah Saraf',
                'jenis_layanan' => 'Khusus',
                'biaya' => 37827000,
            ],

            // Tindakan Medis
            // Tindakan Medik Operatif
            // Kulit dan Kelamin
            [
                'nama_layanan' => 'Kulit dan Kelamin',
                'jenis_layanan' => 'Kecil',
                'biaya' => 90000,
            ],
            [
                'nama_layanan' => 'Kulit dan Kelamin',
                'jenis_layanan' => 'Sedang',
                'biaya' => 1215000,
            ],

            // Tindakan Medis
            // Tindakan Medik Operatif
            // Bedah Plastik
            [
                'nama_layanan' => 'Bedah Plastik',
                'jenis_layanan' => 'Kecil',
                'biaya' => 992000,
            ],
            [
                'nama_layanan' => 'Bedah Plastik',
                'jenis_layanan' => 'Sedang',
                'biaya' => 4860000,
            ],
            [
                'nama_layanan' => 'Bedah Plastik',
                'jenis_layanan' => 'Besar',
                'biaya' => 9720000,
            ],
            [
                'nama_layanan' => 'Bedah Plastik',
                'jenis_layanan' => 'Khusus',
                'biaya' => 32400000,
            ],

            // Tindakan Medis
            // Tindakan Medik Operatif
            // Obstetri dan Gynekologi
            [
                'nama_layanan' => 'Obstetri dan Gynekologi',
                'jenis_layanan' => 'Partus Spontan',
                'biaya' => 634000,
            ],
            [
                'nama_layanan' => 'Obstetri dan Gynekologi',
                'jenis_layanan' => 'Partus dengan Tindakan',
                'biaya' => 756000,
            ],
            [
                'nama_layanan' => 'Obstetri dan Gynekologi',
                'jenis_layanan' => 'Sectiocaesarea',
                'biaya' => 2079000,
            ],
            [
                'nama_layanan' => 'Obstetri dan Gynekologi',
                'jenis_layanan' => 'Operasi Kecil',
                'biaya' => 992000,
            ],
            [
                'nama_layanan' => 'Obstetri dan Gynekologi',
                'jenis_layanan' => 'Operasi Sedang',
                'biaya' => 5512000,
            ],
            [
                'nama_layanan' => 'Obstetri dan Gynekologi',
                'jenis_layanan' => 'Operasi Besar',
                'biaya' => 8181000,
            ],
            [
                'nama_layanan' => 'Obstetri dan Gynekologi',
                'jenis_layanan' => 'Operasi Khusus',
                'biaya' => 20250000,
            ],
            
            // Tindakan Medis
            // Tindakan Medik Operatif
            // Bedah Telinga, Hidung, dan Tenggorokan
            [
                'nama_layanan' => 'Bedah Telinga, Hidung, dan Tenggorokan',
                'jenis_layanan' => 'Kecil',
                'biaya' => 844000,
            ],
            [
                'nama_layanan' => 'Bedah Telinga, Hidung, dan Tenggorokan',
                'jenis_layanan' => 'Sedang',
                'biaya' => 3418000,
            ],
            [
                'nama_layanan' => 'Bedah Telinga, Hidung, dan Tenggorokan',
                'jenis_layanan' => 'Besar',
                'biaya' => 5563000,
            ],
            [
                'nama_layanan' => 'Bedah Telinga, Hidung, dan Tenggorokan',
                'jenis_layanan' => 'Khusus',
                'biaya' => 12451000,
            ],

            // Tindakan Medis
            // Tindakan Medik Operatif
            // Bedah Mata
            [
                'nama_layanan' => 'Bedah Mata',
                'jenis_layanan' => 'Kecil',
                'biaya' => 472000,
            ],
            [
                'nama_layanan' => 'Bedah Mata',
                'jenis_layanan' => 'Sedang',
                'biaya' => 1960000,
            ],
            [
                'nama_layanan' => 'Bedah Mata',
                'jenis_layanan' => 'Besar',
                'biaya' => 3248100,
            ],
            [
                'nama_layanan' => 'Bedah Mata',
                'jenis_layanan' => 'Khusus',
                'biaya' => 4994000,
            ],

            // Tindakan Medis
            // Tindakan Medik Operatif
            // Bedah Pulmonologi
            [
                'nama_layanan' => 'Bedah Pulmonologi',
                'jenis_layanan' => 'Kecil',
                'biaya' => 157000,
            ],
            [
                'nama_layanan' => 'Bedah Pulmonologi',
                'jenis_layanan' => 'Sedang',
                'biaya' => 1944000,
            ],
            [
                'nama_layanan' => 'Bedah Pulmonologi',
                'jenis_layanan' => 'Besar',
                'biaya' => 2495000,
            ],
            
            // Tindakan Medis
            // Kemoterapi
            [
                'nama_layanan' => 'Kemoterapi',
                'jenis_layanan' => null,
                'biaya' => 94500,
            ],

            // Tindakan Medis
            // Shock Wave Therapy
            [
                'nama_layanan' => 'Shock Wave Therapy',
                'jenis_layanan' => 'Kecil',
                'biaya' => 270000,
            ],
            [
                'nama_layanan' => 'Shock Wave Therapy',
                'jenis_layanan' => 'Sedang',
                'biaya' => 3186000,
            ],

            // Tindakan Medis
            // Transcanial Magnetic Stimulation (TMS)
            [
                'nama_layanan' => 'Transcanial Magnetic Stimulation (TMS)',
                'jenis_layanan' => null,
                'biaya' => 270000,
            ],

            // Tindakan Medis
            // Akupuntur
            [
                'nama_layanan' => 'Akupuntur',
                'jenis_layanan' => null,
                'biaya' => 105000,
            ],

            // Tindakan Medis
            // Hemodialisa
            [
                'nama_layanan' => 'Hemodialisa',
                'jenis_layanan' => null,
                'biaya' => 135000,
            ],

            // Penunjang Medis
            // Laboratorium
            [
                'nama_layanan' => 'Laboratorium',
                'jenis_layanan' => 'Patologi Anatomi',
                'biaya' => 112500,
            ],
            [
                'nama_layanan' => 'Laboratorium',
                'jenis_layanan' => 'Hematologi',
                'biaya' => 15300,
            ],
            [
                'nama_layanan' => 'Laboratorium',
                'jenis_layanan' => 'Hemostasis',
                'biaya' => 18000,
            ],
            [
                'nama_layanan' => 'Laboratorium',
                'jenis_layanan' => 'Analisa Cairan',
                'biaya' => 90000,
            ],
            [
                'nama_layanan' => 'Laboratorium',
                'jenis_layanan' => 'Kimia',
                'biaya' => 18000,
            ],
            [
                'nama_layanan' => 'Laboratorium',
                'jenis_layanan' => 'Imuno Serologi',
                'biaya' => 20000,
            ],
            [
                'nama_layanan' => 'Laboratorium',
                'jenis_layanan' => 'Petanda Tumor',
                'biaya' => 198000,
            ],
            [
                'nama_layanan' => 'Laboratorium',
                'jenis_layanan' => 'Mikrobiologi',
                'biaya' => 43200,
            ],
            [
                'nama_layanan' => 'Laboratorium',
                'jenis_layanan' => 'Urinalisasi',
                'biaya' => 18000,
            ],
            [
                'nama_layanan' => 'Laboratorium',
                'jenis_layanan' => 'Tinja',
                'biaya' => 29000,
            ],
            [
                'nama_layanan' => 'Laboratorium',
                'jenis_layanan' => 'Transfusi Darah',
                'biaya' => 27000,
            ],
            [
                'nama_layanan' => 'Laboratorium',
                'jenis_layanan' => 'Biomolekuler',
                'biaya' => 45000,
            ],

            // Penunjang Medis
            // Radiologi/Radiografi/Rontgen/Radionuklir
            [
                'nama_layanan' => 'Radiologi/Radiografi/Rontgen/Radionuklir',
                'jenis_layanan' => 'CT Scan',
                'biaya' => 334000,
            ],
            [
                'nama_layanan' => 'Radiologi/Radiografi/Rontgen/Radionuklir',
                'jenis_layanan' => 'MRI',
                'biaya' => 1308000,
            ],
            [
                'nama_layanan' => 'Radiologi/Radiografi/Rontgen/Radionuklir',
                'jenis_layanan' => 'Diagnostik Sederhana',
                'biaya' => 54000,
            ],
            [
                'nama_layanan' => 'Radiologi/Radiografi/Rontgen/Radionuklir',
                'jenis_layanan' => 'Diagnostik Sedang',
                'biaya' => 324000,
            ],
            [
                'nama_layanan' => 'Radiologi/Radiografi/Rontgen/Radionuklir',
                'jenis_layanan' => 'Diagnostik Sulit',
                'biaya' => 526000,
            ],
            [
                'nama_layanan' => 'Radiologi/Radiografi/Rontgen/Radionuklir',
                'jenis_layanan' => 'Pemeriksaan dengan Kontras Sederhana',
                'biaya' => 45000,
            ],
            [
                'nama_layanan' => 'Radiologi/Radiografi/Rontgen/Radionuklir',
                'jenis_layanan' => 'Pemeriksaan dengan Kontras Sedang',
                'biaya' => 324000,
            ],
            [
                'nama_layanan' => 'Radiologi/Radiografi/Rontgen/Radionuklir',
                'jenis_layanan' => 'Pemeriksaan dengan Kontras Sulit',
                'biaya' => 607000,
            ],
            [
                'nama_layanan' => 'Radiologi/Radiografi/Rontgen/Radionuklir',
                'jenis_layanan' => 'Pemeriksaan dengan Kontras Khusus',
                'biaya' => 2592000,
            ],
            [
                'nama_layanan' => 'Radiologi/Radiografi/Rontgen/Radionuklir',
                'jenis_layanan' => 'Pemeriksaan Radioterapi',
                'biaya' => 1215000,
            ],
            [
                'nama_layanan' => 'Radiologi/Radiografi/Rontgen/Radionuklir',
                'jenis_layanan' => 'Intervensi Radiologi',
                'biaya' => 283500,
            ],
            [
                'nama_layanan' => 'Radiologi/Radiografi/Rontgen/Radionuklir',
                'jenis_layanan' => 'Kedokteran Nuklir',
                'biaya' => 165000,
            ],

            // Penunjang Medis
            [
                'nama_layanan' => 'Fisioterapi',
                'jenis_layanan' => null,
                'biaya' => 28000,
            ],
            [
                'nama_layanan' => 'Ultrasonografi (USG)',
                'jenis_layanan' => 'Sederhana',
                'biaya' => 63000,
            ],
            [
                'nama_layanan' => 'Ultrasonografi (USG)',
                'jenis_layanan' => 'Sedang',
                'biaya' => 324000,
            ],
            [
                'nama_layanan' => 'Ultrasonografi (USG)',
                'jenis_layanan' => 'Sulit',
                'biaya' => 630000,
            ],
            [
                'nama_layanan' => 'Laboratorium Teknik Gigi',
                'jenis_layanan' => null,
                'biaya' => 180000,
            ],
            [
                'nama_layanan' => 'Pemulasaran Jenazah',
                'jenis_layanan' => null,
                'biaya' => 49500,
            ],
            [
                'nama_layanan' => 'Penggunaan Alat',
                'jenis_layanan' => null,
                'biaya' => 36000,
            ],
        ];

        foreach ($tarifs as $tarif) {
            \App\Models\Tarif::create($tarif);
        }
    }
}
