<?php

namespace App\Http\Controllers;

use App\Models\Perawat;
use App\Models\Poli;
use App\Models\Kamar;
use Illuminate\Http\Request;

class PerawatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perawat = Perawat::orderBy('id')->paginate(10);
        $poli = Poli::all();
        return view('perawat.index', compact('perawat', 'poli'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $poli = Poli::all();
        $kamars = Kamar::all();
        return view('perawat.create', compact('poli', 'kamars'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'id_poli' => 'required|exists:poli,id',
            'kamar_id' => 'required|exists:kamar,id',
        ]);

        Perawat::create($request->all());

        return redirect()->route('perawat.index')
            ->with('success', 'Perawat berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Perawat $perawat)
    {
        return view('perawat.show', compact('perawat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Perawat $perawat)
    {
        $poli = Poli::all();
        $kamars = Kamar::all();
        return view('perawat.edit', compact('perawat', 'poli', 'kamars'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Perawat $perawat)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'id_poli' => 'required|exists:poli,id',
            'kamar_id' => 'required|exists:kamar,id',
        ]);

        // Simpan nilai sebelum update
        $oldValues = $perawat->getAttributes();

        // Lakukan update
        $perawat->update($request->all());

        // Simpan nilai setelah update
        $newValues = $perawat->fresh()->getAttributes();

        // Bandingkan nilai
        $changed = array_diff_assoc($newValues, $oldValues);

        // Jika tidak ada perubahan
        if (empty($changed)) {
            return redirect()->route('perawat.index')
                ->with('warning', 'Tidak ada perubahan data');
        }

        // Jika ada perubahan
        return redirect()->route('perawat.index')
            ->with('success', 'Perawat berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Perawat $perawat)
    {
        $perawat->delete();

        return redirect()->route('perawat.index')
            ->with('success', 'Perawat berhasil dihapus');
    }
}
