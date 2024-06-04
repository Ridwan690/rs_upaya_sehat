<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\RekamMedik;
use App\Models\Kunjungan;
use App\Models\Dokter;
use App\Models\Perawat;
use App\Models\Poli;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pasien = Pasien::latest()->paginate(5);
        return view('pasien.index', compact('pasien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $polis = Poli::all();
        $dokters = Dokter::all();
        $perawats = Perawat::all();
        return view('pasien.create', compact('dokters', 'perawats', 'polis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nik' => 'required|numeric|digits:16|unique:pasien,nik',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'pendidikan' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'status' => 'required',
            'no_telepon' => 'required|numeric|digits_between:10,13',
            'dokter_id' => 'required|exists:dokter,id',
            'perawat_id' => 'required|exists:perawat,id',
            'poli' => 'required',
        ], [
            'nik.unique' => 'NIK telah terdaftar!', // Pesan kustom untuk aturan unique
        ]);

        // Buat pasien baru
        $pasien = Pasien::create($request->only('nik',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'pendidikan',
        'agama',
        'pekerjaan',
        'status',
        'no_telepon'));

        // Buat nomor rekam medik jika belum ada
        $rekamMedik = RekamMedik::firstOrCreate(
            ['pasien_id' => $pasien->id],
            ['no_rekam_medik' => 'RM-' . str_pad($pasien->id, 6, '0', STR_PAD_LEFT)]
        );

        // Buat kunjungan baru
        Kunjungan::create([
            'rekam_medik_id' => $rekamMedik->id,
            'dokter_id' => $request->dokter_id,
            'perawat_id' => $request->perawat_id,
            'tanggal' => $request->tanggal,
            'poli' => $request->poli,
            'diagnosa' => $request->diagnosa,
            'tindakan' => $request->tindakan,
        ]);

        return redirect()->route('pasien.index')
            ->with('success', 'Pasien berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien)
    {
        return view('pasien.show', compact('pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasien $pasien)
    {
        return view('pasien.edit', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasien $pasien)
    {
        $request->validate([
            'nama' => 'required',
            'nik' => 'required|numeric|digits:16',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'pendidikan' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'status' => 'required',
            'no_telepon' => 'required|numeric|digits_between:10,13',
        ]);

        $pasien->update($request->all());

        return redirect()->route('pasien.index')
            ->with('success', 'Pasien berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasien $pasien)
    {
        $pasien->delete();

        return redirect()->route('pasien.index')
            ->with('success', 'Pasien berhasil dihapus');
    }
}
