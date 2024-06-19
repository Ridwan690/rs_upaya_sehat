<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Cetak Kartu Pasien</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .hospital-name {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .address {
            margin-bottom: 10px;
        }
        .contact-info {
            margin-bottom: 20px;
        }
        .separator {
            border-top: 1px solid black;
            margin: 20px 0;
        }
        .patient-details {
            margin-top: 30px;
        }
        .patient-details p {
            margin-bottom: 5px;
        }
        .queue-number {
            text-align: center;
            padding-top: 10px;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            font-style: italic;
        }
        /* Atur gaya cetak */
        @media print {
            /* Sembunyikan tombol cetak saat mencetak */
            .no-print {
                display: none;
            }
        }
        .print-button {
            position: absolute;
            bottom: 20px;
            right: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="hospital-name">Rumah Sakit Upaya Sehat</div>
            <div class="address">Kabupaten Sorong Papua barat</div>
            <div class="contact-info">Telp: 123-456-789 | Email: rsupayasehat@gmail.com</div>
        </div>
        <div class="separator"></div>
        <div class="patient-details">
            <h2>Data Pasien</h2>
            <p><strong>No. Rekam Medik:</strong> {{ $patientCard->no_rekam_medik }}</p>
            <p><strong>Nama:</strong> {{ $patientCard->pasien->nama }}</p>

        </div>
    </div>
</body>
</html>
