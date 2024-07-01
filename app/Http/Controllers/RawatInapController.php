<?php

namespace App\Http\Controllers;

use App\Models\RawatInap;
use App\Models\Pasien;
use App\Models\Kamar;
use App\Models\Obat;
use App\Models\Tarif;
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

        $availableKamars = $kamars->filter(function ($kamar) {
            return $kamar->current_occupancy < $kamar->kapasitas;
        });
        $uniqueTipeKamars = $availableKamars->groupBy('tipe_kamar')->keys()->sort();

        return view('rawat-inap.create', compact('rawatInap', 'pasiens', 'availableKamars', 'uniqueTipeKamars'));
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
        ]);
        $rawatInap = new RawatInap();
        $rawatInap->id_rekammedik = $request->id_rekammedik;
        $rawatInap->id_kamar = $request->id_kamar;
        $rawatInap->tanggal_masuk = $request->tanggal_masuk;
        $rawatInap->save();
        return redirect()->route('rawat-inap.index');
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
        return view('rawat-inap.edit', compact('rawatInap', 'obats', 'tarifs'));
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
        ]);

        $rawatInap = RawatInap::findOrFail($id);
        $rawatInap->update($request->only(['tanggal_keluar', 'status', 'catatan']));
        $takarans = collect($request->input('takaran', []))->map(function ($takaran) {
            return ['takaran' => $takaran];
        });
        $rawatInap->obat()->sync($takarans);
        $rawatInap->tarif()->sync($request->tarif_id);

        return redirect()->route('rawat-inap.show', $id)->with('success', 'Data Rawat Inap berhasil diupdate.');
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
        $printBraceletInPatient = RawatInap::findOrFail($id);
        $pdf = PDF::loadView('rawat-inap.printBracelet', compact('printBraceletInPatient'))->setPaper([0, 0, 130, 288], 'landscape');
        return $pdf->stream('cetak-gelang.pdf');
    }



    // public function countAge() {
    //     $pasien = Pasien::all();
    //     $tanggLahir = $pasien->tanggal_lahir;
    //     $umur = Carbon::parse($tanggLahir)->diffForHumans();
    // }
}
