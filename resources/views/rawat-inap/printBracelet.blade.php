<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Cetak Gelang</title>
    <style>
    @page {
        size: 160mm 40mm; /* Adjust the page size to match the content */
        margin: 0;
    }

    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .bracelet {
        display: inline-block;
        position: relative;
        font-family: Arial, sans-serif;
        font-size: 14px;
        width: 100%;
        padding: 5mm 0;
        overflow: hidden;
        page-break-inside: avoid; /* Add this to prevent page breaks */
    }

    .info-section {
        display: inline-block;
        width: calc(100% - 12mm);
        vertical-align: top;
        padding: 0 5mm;
    }

    .barcode-section {
        padding-top: 10mm; 
        display: inline-block;
        vertical-align: top;
    }

    .bottom-border {
        position: absolute;
        bottom: 0mm;
        left: 0;
        width: 100%;
        height: 5mm;

        page-break-inside: avoid;
        page-break-before: avoid;
    }

    .hospital-name {
        font-weight: bold;
        font-size: 16px;
        margin-bottom: 3mm;
    }

    .patient-name {
        font-size: 14px;
        margin-bottom: 2mm;
    }

    .patient-info {
        font-size: 12px;
        margin-bottom: 1mm;
    }
    .patient-date {
        display: block;
        width: 100%;
        text-align: center;
        font-size: 12px;
        margin-bottom: 2mm;
    }
</style>
</head>

<body>
<div class="bracelet">
    <div class="info-section">
        <div class="hospital-name">Rumah Sakit Upaya Sehat</div>
        <div class="patient-name">{{ $printBraceletInPatient->rekammedik->pasien->nama }}</div>
        <div class="patient-info">No. Rekam Medik: {{ $printBraceletInPatient->rekammedik->no_rekam_medik }}</div>
        <div class="patient-info">Tanggal Lahir: {{ $printBraceletInPatient->rekammedik->pasien->tanggal_lahir }}</div>
    </div>
    <div class="barcode-section">
        <div class="patient-date">Tanggal Cetak : {{ $printBraceletInPatient->gelang->created_at }}</div>
        {!! DNS1D::getBarcodeHTML($printBraceletInPatient->rekammedik->no_rekam_medik, 'C39') !!}
    </div>
</div>
<span class="bottom-border" style="background-color: 
    @if($printBraceletInPatient->gelang->warna_gelang == 'Biru Muda')
        #87CEEB
    @elseif($printBraceletInPatient->gelang->warna_gelang == 'Merah Muda')
        #FFC0CB
    @elseif($printBraceletInPatient->gelang->warna_gelang == 'Kuning')
        #FFFF00
    @elseif($printBraceletInPatient->gelang->warna_gelang == 'Merah')
        #FF0000
    @else
        #800080
    @endif
"></span>
</body>

</html>
