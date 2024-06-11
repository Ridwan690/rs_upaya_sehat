<?php

namespace App\Http\Controllers;

use App\Models\DaftarRawatJalan;
use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Dokter;
use App\Models\Poli;
use App\Models\RekamMedik;
use App\Models\Kunjungan;
use App\Models\Jadwal;
use App\Models\Antrian;

class DaftarRawatJalanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $daftarRawatJalan = DaftarRawatJalan::latest()->paginate(5);
        return view('daftar-rawat-jalan.index', compact('daftarRawatJalan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pasien = Pasien::all();
        $dokter = Dokter::all();
        $poli = Poli::all();
        $RekamMedik = RekamMedik::all();
        $jadwal = Jadwal::all();
        return view('daftar-rawat-jalan.create', compact('poli', 'dokter', 'pasien', 'RekamMedik', 'jadwal'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        
        $request->validate([
            // 'pasien_id' => 'required|exists:pasien,id',
            // 'dokter_id' => 'required|exists:dokter,id',
            // 'poli_id' => 'required|exists:poli,id',
            'rekam_medik_id' => 'required|exists:rekammedik,id',
            'jadwal_id' => 'required|exists:jadwal,id',
            // 'tanggal' => 'required',
            // 'antrian' => 'required|exists:antrian,kode_antrian,nomor_antrian',
        ]);

        Kunjungan::create([
            'rekam_medik_id' => $request->rekam_medik_id,
            'dokter_id' => $request->dokter_id,
            'poli' => $request->poli_id->nama,
            // 'tanggal' => $request->tanggal,
        ]);

        $queueCode = Poli::where('id', $request->poli_id)->first()->kode_poli;
        $queueNumber = $queueCode . '-' . Antrian::where('kode_antrian', $queueCode)->count();
        
        Antrian::create([
            // 'kode_antrian' => $queueCode,
            'nomor_antrian' => $queueNumber,
        ]);

        DaftarRawatJalan::create($request->all());
        return redirect()->route('daftar-rawat-jalan.index')
            ->with('success', 'Daftar Rawat Jalan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(DaftarRawatJalan $daftarRawatJalan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DaftarRawatJalan $daftarRawatJalan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DaftarRawatJalan $daftarRawatJalan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DaftarRawatJalan $daftarRawatJalan)
    {
        //
    }
}
