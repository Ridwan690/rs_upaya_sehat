<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\RekamMedik;
use App\Models\Kunjungan;
use App\Models\Dokter;
use App\Models\Perawat;
use App\Models\Poli;
use App\Models\Antrian;
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
        $pasiens = Pasien::all();
        $polis = Poli::all();
        $dokters = Dokter::all();
        return view('pasien.create', compact('dokters', 'polis', 'pasiens'));
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
            'dokter_id' => 'required',
            'poli_id' => 'required',
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
            ->max('nomor_antrian') + 1;

        // Gabungkan kode_poli dengan nomor antrian
        $nomorAntrianFormatted = $kodePoli . '-' . $nomorAntrian;

        // Buat antrian baru
        Antrian::create([
            'id_poli' => $request->poli_id,
            'id_dokter' => $request->dokter_id,
            'id_kunjungan' => $kunjungan->id,
            'nomor_antrian' => $nomorAntrian,
            'kode_antrian' => $nomorAntrianFormatted,
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

    public function daftarUlang(Request $request)
    {
        $request->validate([
            'pasien_id' => 'required',
            'dokter_id_simple' => 'required',
            'poli_id_simple' => 'required',
        ]);

        // Temukan atau buat rekam medik untuk pasien
        $pasien = Pasien::find($request->pasien_id);
        if (!$pasien) {
            // Tambahkan logika untuk menangani ketika pasien tidak ditemukan
            // Misalnya, kembalikan respons dengan pesan error
            return back()->withErrors(['nik' => 'Pasien dengan NIK ini tidak ditemukan.']);
        }

        // Temukan rekam medik atau buat yang baru jika belum ada
        $rekamMedik = RekamMedik::where('pasien_id', $pasien->id)->first();

        // Buat kunjungan baru
        $kunjungan = Kunjungan::create([
            'rekam_medik_id' => $rekamMedik->id,
            'dokter_id' => $request->dokter_id_simple,
            'poli_id' => $request->poli_id_simple,
        ]);

        $poli = Poli::find($request->poli_id_simple);
        $kodePoli = $poli->kode_poli;

        // Generate nomor antrian
        $nomorAntrian = Antrian::where('id_poli', $request->poli_id_simple)
            ->whereDate('created_at', now()->toDateString())
            ->max('nomor_antrian') + 1;

        // Gabungkan kode_poli dengan nomor antrian
        $nomorAntrianFormatted = $kodePoli . '-' . $nomorAntrian;

        // Buat antrian baru
        Antrian::create([
            'id_poli' => $request->poli_id_simple,
            'id_dokter' => $request->dokter_id_simple,
            'id_kunjungan' => $kunjungan->id,
            'nomor_antrian' => $nomorAntrian,
            'kode_antrian' => $nomorAntrianFormatted,
        ]);
        return redirect()->route('pasien.index')
                        ->with('success', 'Pendaftaran berhasil.');
    }
}
