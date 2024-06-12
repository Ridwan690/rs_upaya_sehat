<?php

namespace App\Http\Controllers;

use App\Models\RawatJalan;
use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Dokter;
use App\Models\Poli;
use App\Models\RekamMedik;
use App\Models\Kunjungan;
use App\Models\Antrian;

class RawatJalanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rawatJalan = RawatJalan::latest()->paginate(5);
        return view('rawat-jalan.index', compact('rawatJalan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pasiens = Pasien::all();
        $polis = Poli::all();
        $dokters = Dokter::all();
        return view('rawat-jalan.create', compact('dokters', 'polis', 'pasiens'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pasien_id' => 'required|exists:pasien,id',
            'dokter_id' => 'required|exists:dokter,id',
            'poli_id' => 'required|exists:poli,id',
        ]);
        $rekamMedik = RekamMedik::where('pasien_id', $request->pasien_id)->first();

        $kunjungan = Kunjungan::create([
            'rekam_medik_id' => $rekamMedik->id,
            'dokter_id' => $request->dokter_id,
            'poli_id' => $request->poli_id,
        ]);

        // Ambil kode_poli berdasarkan poli_id
        $poli = Poli::find($request->poli_id);
        $kodePoli = $poli->kode_poli;
       
        // Generate nomor antrian
        $nomorAntrian = Antrian::where('id_poli', $request->poli_id)
            ->whereDate('created_at', now()->toDateString())
            ->max('nomor_rawat_jalan') + 1;

        // Gabungkan kode_poli dengan nomor antrian
        $nomorAntrianFormatted = 'RJ-' . $kodePoli . '-' . $nomorAntrian;

        // Buat antrian baru
        Antrian::create([
            'id_poli' => $request->poli_id,
            'id_dokter' => $request->dokter_id,
            'id_kunjungan' => $kunjungan->id,
            'nomor_rawat_jalan' => $nomorAntrian,
            'kode_antrian' => $nomorAntrianFormatted,
        ]);
        $count = RawatJalan::whereHas('kunjungan', function($query) use ($rekamMedik) {
            $query->where('rekam_medik_id', $rekamMedik->id);
        })->count();

        RawatJalan::create([
        'id_kunjungan' => $kunjungan->id,
        'kunjungan_count' => $count + 1,
        ]);

        return redirect()->route('rawat-jalan.index')
            ->with('success', 'Daftar Rawat Jalan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(RawatJalan $rawatJalan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RawatJalan $rawatJalan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RawatJalan $rawatJalan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RawatJalan $rawatJalan)
    {
        //
    }
}
