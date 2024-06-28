<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resep Obat</title>
    <style>
        @page {
            margin : 0px;
        }
        html {
            margin : 0px;
        }
        body {
            margin : 0px;
            font-family: Arial, sans-serif;
            /* width: 74mm; */
            padding: 5mm;
        }
        header {
            text-align: center;
            margin-bottom: 10px;
        }
        h1 {
            font-size: 14px;
            margin-bottom: 3px;
        }
        h3 {
            margin-bottom: 3px;
            font-size: 11px;
            text-align: center;
        }
        p {
            margin: 0;
            font-size: 8px;
            text-align: center;
        }
        table {
            width: 70%;
            margin: 0 auto;
            border-collapse: collapse;
            font-size: 10px;
        }
        .no-border th, .no-border td {
            border: none;
            padding: 4px;
            text-align: left;
        }
        th, td {
            border: 1px solid #000;
            padding: 4px;
            text-align: left;
        }
        th {
            background-color: #fff;
        }

        @media print {
            html {
                margin: 0;
            }
            body {
                width: 74mm;
                height: 105mm; 
                margin: 0;
            }
            header, h1 {
                margin: 0;
                padding: 0;
            }
            table {
                width: 70%;
                margin: 0 auto;
            }
            th, td {
                padding: 4px;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Rumah Sakit Upaya Sehat</h1>
        <p>Kabupaten Sorong | Telp: 123-456-789</p>
        <p>Email: kontak-kami@rsus.com</p>
        <hr>
    </header>

    <h3>Data Pasien</h3>
    <table class="no-border">
        <tr>
            <th>Nama Pasien</th>
            <td>{{ $entity->rekammedik->pasien->nama ?? $entity->rekamMedikUtama->pasien->nama }}</td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td>{{ date('d-m-Y', strtotime($entity->rekammedik->pasien->tanggal_lahir ?? $entity->rekamMedikUtama->pasien->tanggal_lahir)) }}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>{{ $entity->rekammedik->pasien->jenis_kelamin ?? $entity->rekamMedikUtama->pasien->jenis_kelamin }}</td>
        </tr>
    </table>
    <hr>
    <h3>Resep Obat</h3>
    <table class="no-border">
        <thead>
            <tr>
                <th>Nama Obat</th>
                <th>Takaran</th>
            </tr>
        </thead>
        <tbody>
            @foreach($entity->obat as $obat)
                <tr>
                    <td>{{ $obat->nama_obat }}</td>
                    <td>{{ $obat->pivot->takaran }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
