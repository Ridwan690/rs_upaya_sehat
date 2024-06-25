<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Cetak Antrian</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0px;
            }
            .container {
                max-width: 800px;
                margin: auto;
            }
            .header {
                text-align: center;
                margin-bottom: 10px;
            }
            .hospital-name {
                font-size: 24px;
                font-weight: bold;
                margin-bottom: 5px;
            }
            .address {
                font-size: 11px;
                margin-bottom: 0;
            }
            .contact-info {
                font-size: 11px;
                margin-bottom: 0;
            }
            .patient-details {
                margin-top: 30px;
            }
            .patient-details p {
                margin-bottom: 5px;
            }
            .queue-number {
                text-align: center;
                padding-top: 3px;
            }
            .tanggal {
                margin: 5px 0;
                font-size: 13px;
            }
            .footer {
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
                <div class="address">Kabupaten Sorong Papua</div>
                <div class="contact-info">Telp: 123-456-789 | Email: kontak-kami@rsus.com</div>
            </div>
            <hr>
            <div class="queue-number">
                <div class="tanggal">{{ $queue->created_at }}</div>
                <div style="font-size: 20px; padding-bottom: 10px"><b>Nomor Antrian</b></div>
                <div style="font-size: 36px; font-weight: bold;">{{ $queue->kode_antrian }}</div>
            </div>
            <br>
            <div class="footer">
                Mohon menunggu nomor anda dipangggil.
            </div>
        </div>
    </body>
</html>
