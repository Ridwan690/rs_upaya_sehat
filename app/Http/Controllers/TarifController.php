<?php

namespace App\Http\Controllers;

use App\Models\Tarif;
use App\Models\RawatJalan;
use App\Models\RawatInap;
use App\Models\Kunjungan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class TarifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tarif = Tarif::orderBy('id')->paginate(10);
        return view('tarif.index', compact('tarif'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tarif.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_layanan' => 'required',
            'jenis_layanan' => 'nullable',
            'biaya' => 'required|numeric',
        ]);

        Tarif::create($request->all());

        return redirect()->route('tarif.index')
            ->with('success', 'Tarif berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tarif $tarif)
    {
        return view('tarif.show', compact('tarif'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tarif $tarif)
    {
        return view('tarif.edit', compact('tarif'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tarif $tarif)
    {
        $request->validate([
            'nama_layanan' => 'required',
            'jenis_layanan' => 'nullable',
            'biaya' => 'required|numeric',
        ]);

        $tarif->update($request->all());

        return redirect()->route('tarif.index')
            ->with('success', 'Tarif berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarif $tarif)
    {
        $tarif->delete();

        return redirect()->route('tarif.index')
            ->with('success', 'Tarif berhasil dihapus');
    }
        public function totalHarga(string $jenis, string $id)
    {
        $totalHargaTarif = 0;
        $totalHargaObat = 0;
        $totalHarga = 0;
        $harga_kamar = 0;
        $lama_inap = 0;

        switch ($jenis) {
            case 'rawat_inap':
                $entity = RawatInap::with(['tarif', 'obat'])->findOrFail($id);
                $kamar = $entity->kamar->harga;
                $tanggal_masuk = Carbon::parse($entity->tanggal_masuk);
                if ($tanggal_masuk->isToday()) {
                    $lama_inap = 1;
                } else {
                    $tanggal_keluar = Carbon::parse($entity->tanggal_keluar);
                    $lama_inap = $tanggal_keluar->diffInDays($tanggal_masuk);
                }
                $harga_kamar = $kamar * $lama_inap;
                $totalHargaTarif = $entity->tarif->sum('biaya') + $harga_kamar;
                $totalHargaObat = $entity->obat->sum('harga');
                break;
            
            case 'rawat_jalan':
                $entity = RawatJalan::with(['tarif', 'obat'])->findOrFail($id);
                $totalHargaTarif = $entity->tarif->sum('biaya');
                $totalHargaObat = $entity->obat->sum('harga');
                break;
            
            case 'kunjungan':
                $entity = Kunjungan::with(['tarif', 'obat'])->findOrFail($id);
                $totalHargaTarif = $entity->tarif->sum('biaya');
                $totalHargaObat = $entity->obat->sum('harga');
                break;
            
            default:
                abort(404, 'Jenis tidak ditemukan');
        }

        $totalHarga = $totalHargaTarif + $totalHargaObat;
        $pdf = PDF::loadView('tarif.total_harga', compact('entity', 'totalHargaTarif', 'totalHargaObat', 'totalHarga', 'lama_inap', 'jenis'));
        return $pdf->stream('TotalHarga-'.$jenis.$entity->id.'-'.date('d-m-Y').'.pdf');
    }

}
