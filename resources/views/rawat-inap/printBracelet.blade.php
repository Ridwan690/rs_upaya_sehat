<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Cetak Gelang</title>
    <style>
        /* @page{
            margin:0;
        } */
        body {
            font-family: Arial, sans-serif;
            margin: 0px;
            /* width: 100%;
            height: 100%; */
        }

        .bracelet {
            /* width: 100%;
            height: 100%; */
            /* border: 1px solid #000; */
            padding: 5px;
            box-sizing: border-box;
            text-align: center;
        }

        .hospital-name {
            font-size: 12px;
            font-weight: bold;
        }

        .patient-name {
            font-size: 12px;
            font-weight: bold;
            /* margin-top: 5px; */
        }

        .patient-info {
            font-size: 12px;
            /* margin-top: 2px; */
        }
    </style>
</head>

<body>
    <div class="bracelet">
        <div class="hospital-name">Rumah Sakit Upaya Sehat</div>
        <div class="patient-name">{{ $printBraceletInPatient->rekammedik->pasien->nama }}</div>
        <div class="patient-info">No. Rekam Medik: {{ $printBraceletInPatient->rekammedik->no_rekam_medik }}</div>
        <div class="patient-info">Tanggal Lahir: {{ $printBraceletInPatient->rekammedik->pasien->tanggal_lahir }}</div>
    </div>
</body>

</html>
