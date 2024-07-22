<?php

namespace App\Http\Controllers;

use App\Models\RawatInap;
use App\Models\Pasien;
use App\Models\Kamar;
use App\Models\Obat;
use App\Models\Tarif;
use App\Models\Dokter;
use App\Models\PercetakanGelang;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class RawatInapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rawatInap = RawatInap::latest()->paginate(5);
        return view('rawat-inap.index', compact('rawatInap'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rawatInap = RawatInap::all();
        $pasiens = Pasien::all();
        $kamars = Kamar::withCount([
            'rawatInap as current_occupancy' => function ($query) {
                $query->whereNull('tanggal_keluar');
            }
        ])->get();
        $dokters = Dokter::all();

        $availableKamars = $kamars->filter(function ($kamar) {
            return $kamar->current_occupancy < $kamar->kapasitas;
        });
        $uniqueTipeKamars = $availableKamars->groupBy('tipe_kamar')->keys()->sort();

        return view('rawat-inap.create', compact('rawatInap', 'pasiens', 'availableKamars', 'uniqueTipeKamars', 'dokters'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_rekammedik' => 'required',
            'id_kamar' => 'required',
            'tanggal_masuk' => 'required',
            'warna_gelang' => 'required | in:Biru Muda,Merah Muda,Kuning,Merah,Ungu',
            'dokter_id' => 'required',
        ]);
        $rawatInap = new RawatInap();
        $rawatInap->id_rekammedik = $request->id_rekammedik;
        $rawatInap->id_kamar = $request->id_kamar;
        $rawatInap->tanggal_masuk = $request->tanggal_masuk;
        $rawatInap->dokter_id = $request->dokter_id;
        $rawatInap->save();

        PercetakanGelang::create([
            'rawat_inap_id' => $rawatInap->id,
            'warna_gelang' => $request->warna_gelang,
        ]);
    
        return redirect()->route('rawat-inap.index')
            ->with('success', 'Data Rawat Inap berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rawatInap = RawatInap::with('rekammedik.pasien', 'kamar')->findOrFail($id);
        return view('rawat-inap.show', compact('rawatInap'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rawatInap = RawatInap::findOrFail($id);
        $obats = Obat::all();
        $tarifs = Tarif::all();
        $dokters = Dokter::all();
        return view('rawat-inap.edit', compact('rawatInap', 'obats', 'tarifs', 'dokters'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'tanggal_keluar' => 'nullable|date',
            'status' => 'required|in:Ditangani,Belum Ditangani',
            'catatan' => 'nullable|string',
            'dokter_id' => 'required',
        ]);

        $rawatInap = RawatInap::findOrFail($id);// Simpan nilai sebelum update
        $oldValues = $rawatInap->getAttributes();
    
        // Lakukan update
        $rawatInap->update($request->only(['tanggal_keluar', 'status', 'catatan']));
    
        // Simpan nilai setelah update
        $newValues = $rawatInap->fresh()->getAttributes();
    
        // Bandingkan nilai
        $changed = array_diff_assoc($newValues, $oldValues);
        
        // Simpan takaran obat
        $takarans = collect($request->input('takaran', []))->map(function ($takaran) {
            return ['takaran' => $takaran];
        });
        $rawatInap->obat()->sync($takarans);
        $rawatInap->tarif()->sync($request->tarif_id);

        // Jika tidak ada perubahan
        if (empty($changed)) {
            return redirect()->route('rawat-inap.show', $id)
                ->with('warning', 'Tidak ada perubahan data');
        }
    
        // Jika ada perubahan
        return redirect()->route('rawat-inap.show', $id)
            ->with('success', 'Data Rawat Inap berhasil diupdate.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rawatInap = RawatInap::findOrFail($id);
        $rawatInap->delete();

        return redirect()->route('rawat-inap.index')->with('success', 'Data Rawat Inap berhasil dihapus.');
    }

    public function printBracelet($id)
    {
        $printBraceletInPatient = RawatInap::with('rekammedik.pasien', 'gelang')->findOrFail($id);
        $pdf = PDF::loadView('rawat-inap.printBracelet', compact('printBraceletInPatient'))->setPaper([0, 0, 200, 40], 'landscape');
        return $pdf->stream('cetak-gelang.pdf');
    }




    // public function countAge() {
    //     $pasien = Pasien::all();
    //     $tanggLahir = $pasien->tanggal_lahir;
    //     $umur = Carbon::parse($tanggLahir)->diffForHumans();
    // }
}
