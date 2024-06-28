<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\RawatInap;
use App\Models\RawatJalan;
use App\Models\Kunjungan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obat = Obat::orderBy('id')->paginate(10);
        return view('obat.index', compact('obat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('obat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_obat' => 'required',
            'nama_obat' => 'required',
            'harga' => 'required|numeric',
        ]);

        Obat::create($request->all());

        return redirect()->route('obat.index')
            ->with('success', 'Obat berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Obat $obat)
    {
        return view('obat.show', compact('obat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Obat $obat)
    {
        return view('obat.edit', compact('obat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Obat $obat)
    {
        $request->validate([
            'kode_obat' => 'required',
            'nama_obat' => 'required',
            'harga' => 'required|numeric',
        ]);

        $obat->update($request->all());

        return redirect()->route('obat.index')
            ->with('success', 'Obat berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Obat $obat)
    {
        $obat->delete();

        return redirect()->route('obat.index')
            ->with('success', 'Obat berhasil dihapus');
    }
    public function print(string $jenis, string $id)
    {
        $validJenis = ['rawat_inap', 'rawat_jalan', 'kunjungan'];
        if (!in_array($jenis, $validJenis)) {
            return view('errors.404');
        }

        switch ($jenis) {
            case 'rawat_inap':
                $entity = RawatInap::with('obat')->findOrFail($id);
                $nama = $entity->rekammedik->pasien->nama;
                break;
            
            case 'rawat_jalan':
                $entity = RawatJalan::with('obat')->findOrFail($id);
                $nama = $entity->rekammedik->pasien->nama;
                break;
            
            case 'kunjungan':
                $entity = Kunjungan::with('obat')->findOrFail($id);
                $nama = $entity->rekamMedikUtama->pasien->nama;
                break;
        }
        $pdf = PDF::loadView('obat.print', compact('entity'))
              ->setPaper('A7', 'portrait');
        return $pdf->stream('Resep-obat-'.$nama.'-'.date('d-m-Y').'.pdf');
    }
}
