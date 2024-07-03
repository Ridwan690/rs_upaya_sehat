<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kunjungan;
use App\Models\Dokter;
use App\Models\Poli;
use App\Models\Obat;
use App\Models\Tarif;
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
        $request->validate([
            'rekam_medik_id' => 'required|exists:rekammedik,id',
            'dokter_id' => 'required|exists:dokter,id',
            'poli_id' => 'required|exists:poli,id',
        ]);

        $kunjungan = Kunjungan::findOrFail($id);

        // Simpan nilai sebelum update
        $oldValues = $kunjungan->getAttributes();

        // Lakukan update
        $kunjungan->diagnosa = $request->input('diagnosa');
        $kunjungan->tindakan = $request->input('tindakan');
        $kunjungan->save();

        // Simpan nilai setelah update
        $newValues = $kunjungan->fresh()->getAttributes();

        // Bandingkan nilai
        $changed = array_diff_assoc($newValues, $oldValues);

        // Periksa apakah ada perubahan pada atribut yang seharusnya berubah
        // Di sini, diagnosa dan tindakan tidak dianggap perubahan jika nilainya sama
        unset($changed['diagnosa']); // Hapus diagnosa dari perubahan karena akan di-set ulang
        unset($changed['tindakan']); // Hapus tindakan dari perubahan karena akan di-set ulang

        // Jika tidak ada perubahan
        if (empty($changed)) {
            return redirect()->route('kunjungan.show', $id)
                ->with('warning', 'Tidak ada perubahan data');
        }

        // Jika ada perubahan
        $takarans = collect($request->input('takaran', []))->map(function ($takaran) {
            return ['takaran' => $takaran];
        });
        $kunjungan->obat()->sync($takarans);
        $kunjungan->tarif()->sync($request->tarif_id);

        return redirect()->route('kunjungan.show', $id)
            ->with('success', 'Data kunjungan berhasil diperbarui.');
    }
}
