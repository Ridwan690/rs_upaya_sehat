<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kunjungan;
use App\Models\Dokter;
use App\Models\Poli;
use App\Models\Obat;
use App\Models\Tarif;
use App\Models\TotalHarga;
use App\Models\RekamMedik;


class KunjunganController extends Controller
{
    public function index()
    {
        $kunjungans = Kunjungan::latest()->paginate(5);
        return view('kunjungan.index', compact('kunjungans'));
    }
    public function show($id)
    {
        $kunjungan = Kunjungan::find($id);
        return view('kunjungan.show', compact('kunjungan'));
    }
    public function edit($id)
    {
        $kunjungan = Kunjungan::find($id);
        $dokters = Dokter::all();
        $polis = Poli::all();
        $obats = Obat::all();
        $tarifs = Tarif::all();
        return view('kunjungan.edit', compact('kunjungan','dokters', 'polis', 'obats', 'tarifs'));
    }

    public function update(Request $request, string $id)
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
        $kunjungan->diagnosa = $request->input('diagnosa');
        $kunjungan->tindakan = $request->input('tindakan');

        // Simpan perubahan ke database
        $kunjungan->save();

        //insert tabel pivot
        $kunjungan->obat()->sync($request->obat_id);
        $kunjungan->tarif()->sync($request->tarif_id);
        // Redirect ke halaman yang sesuai dengan pesan sukses
        return redirect()->route('kunjungan.show', $id)->with('success', 'Data kunjungan berhasil diperbarui.');
    }
}
