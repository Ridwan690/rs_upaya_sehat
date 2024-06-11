<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\RekamMedik;
use App\Models\Kunjungan;
use App\Models\Dokter;
use App\Models\Perawat;
use App\Models\Poli;
use Illuminate\Http\Request;

class RekamMedikController extends Controller
{
    public function index() {
        $rekamMedik = RekamMedik::latest()->paginate(5);
        return view('rekam.index', compact('rekamMedik'));
    }

    public function show($id)
    {
        $rekamMedik = RekamMedik::with(['pasien', 'kunjungan'])->findOrFail($id);
        return view('rekam.show', compact('rekamMedik'));
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
        return redirect()->route('rekam.index')->with('success', 'Data kunjungan berhasil diperbarui.');
    }
}
