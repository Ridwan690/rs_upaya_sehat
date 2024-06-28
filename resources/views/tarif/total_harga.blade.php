<html>
  <head>
    <title>Rincian Biaya</title>
    <style>
        @page {
          margin: 0;
        }
      table {
        border-collapse: collapse;
        width: 100%; /* added */
      }
      th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
      }
      th {
        background-color: #f0f0f0;
      }
      .float-end {
        float: right;
      }
      .justify-content-end {
        text-align: right;
      }
    </style>
  </head>
  <body>
    <div style="margin-top: 30px; text-align: center;">
      <div style="width: 75%; margin: 0 auto;">
        <div style="background-color: #fff; padding: 20px;">
          <div style="display: flex; justify-content: space-between; align-items: center;">
            <h3>Rincian Biaya</h3>
          </div>
          <div style="padding: 20px;">
            <h4 style="text-align: left;">Informasi Pasien</h4>
            <table>
              <tr>
                <th style="width: 30%;">Nomor Rekam Medis</th>
                <td style="width: 70%;">{{ $entity->rekammedik->no_rekam_medik ?? $entity->rekamMedikUtama->no_rekam_medik }}</td>
              </tr>
              <tr>
                <th style="width: 30%;">Nama Pasien</th>
                <td style="width: 70%;">{{ $entity->rekammedik->pasien->nama ?? $entity->rekamMedikUtama->pasien->nama }}</td>
              </tr>
              <tr>
                <th style="width: 30%;">Tanggal Kunjungan</th>
                <td style="width: 70%;">{{ now()->format('d-m-Y, H:i:s') }}</td>
              </tr>
            </table>
            <h4 style="text-align: left;">Layanan</h4>
            <table>
              <thead>
                <tr>
                  <th style="width: 70%;">Nama Layanan</th>
                  <th style="width: 30%; text-align: right;">Harga (Rp)</th>
                </tr>
              </thead>
              <tbody>
                @foreach($entity->tarif as $tarif)
                <tr>
                  <td>{{ $tarif->nama_layanan }} - {{ $tarif->jenis_layanan }}</td>
                  <td><span style="float: right;">{{ number_format($tarif->biaya, 0, ',', '.') }}</span></td>
                </tr>
                @endforeach
                @if($jenis == 'rawat_inap' && isset($entity->kamar))
                <tr>
                    <td>Rawat Inap kamar {{ $entity->kamar->tipe_kamar }} selama {{ $lama_inap }} Hari</td>
                    <td><span style="float: right;">{{ number_format($entity->kamar->harga*$lama_inap, 0, ',', '.') }}</span></td>
                </tr>
                @endif
                <tr>
                  <td style="text-align: right;"><b>Total :</b></td>
                  <td><b style="float: right;">{{ number_format($totalHargaTarif, 0, ',', '.') }}</b></td>
                </tr>
              </tbody>
            </table>
            <br>
            <h4 style="text-align: left;">Obat</h4>
            <table>
              <thead>
                <tr>
                  <th style="width: 70%;">Nama Obat</th>
                  <th style="width: 30%; text-align: right;">Harga (Rp)</th>
                </tr>
              </thead>
              <tbody>
                @foreach($entity->obat as $obat)
                <tr>
                  <td>{{ $obat->nama_obat }}</td>
                  <td><span style="float: right;">{{ number_format($obat->harga, 0, ',', '.') }}</span></td>
                </tr>
                @endforeach
                <tr>
                  <td style="text-align: right;"><b>Total :</b></td>
                  <td><b style="float: right;">{{ number_format($totalHargaObat, 0, ',', '.') }}</b></td>
                </tr>
              </tbody>
            </table>
            <br>
            <h3 style="text-align: right;">Total Harga: Rp. {{ number_format($totalHarga, 0, ',', '.') }},-</h3>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>