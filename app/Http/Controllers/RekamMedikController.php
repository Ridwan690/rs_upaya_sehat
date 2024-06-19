<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\RekamMedik;
use App\Models\Kunjungan;
use App\Models\Dokter;
use App\Models\Perawat;
use App\Models\Poli;
use App\Models\RawatJalan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class RekamMedikController extends Controller
{
    public function index() {
        $rekamMedik = RekamMedik::latest()->paginate(5);
        return view('rekam.index', compact('rekamMedik'));
    }

    public function show($id)
    {
        // Ambil rekam medik berdasarkan ID dengan relasi pasien dan kunjungan
        $rekamMedik = RekamMedik::with(['pasien', 'kunjungan'])
            ->findOrFail($id);

        // Ambil data rawat jalan dengan urutan berdasarkan poli
        $rawatJalan = RawatJalan::where('id_rekammedik', $id)
                    ->join('antrian', 'rawat_jalan.id', '=', 'antrian.id_rawat_jalan')
                    ->join('poli', 'antrian.id_poli', '=', 'poli.id')
                    ->select('rawat_jalan.*')
                    ->orderBy('poli.id')
                    ->get();

        return view('rekam.show', compact('rekamMedik', 'rawatJalan'));
    }
    public function edit($id)
    {
        $kunjungan = Kunjungan::find($id);
        $dokters = Dokter::all();
        $polis = Poli::all();
        return view('rekam.edit', compact('kunjungan','dokters', 'polis'));
    }
    public function update(Request $request, $id)
    {
        // Validasi input dari form
        $request->validate([
            'rekam_medik_id' => 'required|exists:rekammedik,id',
            'dokter_id' => 'required|exists:dokter,id',
            'poli_id' => 'required|exists:poli,id',
        ]);

        // Temukan entri Kunjungan berdasarkan ID
        $kunjungan = Kunjungan::findOrFail($id);

        // Update field-field yang diperlukan
        $kunjungan->rekam_medik_id = $request->input('rekam_medik_id');
        $kunjungan->dokter_id = $request->input('dokter_id');
        $kunjungan->poli_id = $request->input('poli_id');
        $kunjungan->diagnosa = $request->input('diagnosa');
        $kunjungan->tindakan = $request->input('tindakan');

        // Simpan perubahan ke database
        $kunjungan->save();

        // Redirect ke halaman yang sesuai dengan pesan sukses
        return redirect()->route('rekam.show', $id)->with('success', 'Data kunjungan berhasil diperbarui.');
    }

    public function printPatientCard($id)
    {
        $patientCard = RekamMedik::with('pasien')->findOrFail($id);
        $pdf = PDF::loadView('rekam.printPatientCard', compact('patientCard'))->setPaper('B7', 'landscape');
        return $pdf->stream();
    }
}
