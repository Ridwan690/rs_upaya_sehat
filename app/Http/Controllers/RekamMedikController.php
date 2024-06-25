<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\RekamMedik;
use App\Models\Kunjungan;
use App\Models\Dokter;
use App\Models\Perawat;
use App\Models\Poli;
use App\Models\RawatJalan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class RekamMedikController extends Controller
{
    public function index() {
        $rekamMedik = RekamMedik::latest()->paginate(5);
        return view('rekam.index', compact('rekamMedik'));
    }

    public function show($id)
    {
        // Ambil rekam medik berdasarkan ID dengan relasi pasien dan kunjungan
        $rekamMedik = RekamMedik::with(['pasien', 'kunjungan'])
            ->findOrFail($id);

        // Ambil data rawat jalan dengan urutan berdasarkan poli
        $rawatJalan = RawatJalan::where('id_rekammedik', $id)
                    ->join('antrian', 'rawat_jalan.id', '=', 'antrian.id_rawat_jalan')
                    ->join('poli', 'antrian.id_poli', '=', 'poli.id')
                    ->select('rawat_jalan.*')
                    ->orderBy('poli.id')
                    ->get();

        return view('rekam.show', compact('rekamMedik', 'rawatJalan'));
    }
    public function edit($id)
    {
        return view('errors.403');
    }
    public function update(Request $request, $id)
    {
        return view('errors.403');
    }

    public function printPatientCard($id)
    {
        $patientCard = RekamMedik::with('pasien')->findOrFail($id);
        $pdf = PDF::loadView('rekam.printPatientCard', compact('patientCard'))->setPaper('B7', 'landscape');
        return $pdf->stream();
    }
}
