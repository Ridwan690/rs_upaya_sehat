<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\RekamMedik;
use App\Models\Kunjungan;
use App\Models\Dokter;
use App\Models\Perawat;
use App\Models\Poli;
use Illuminate\Http\Request;

class RekamMedikController extends Controller
{
    public function index() {
        $rekamMedik = RekamMedik::latest()->paginate(5);
        return view('rekam.index', compact('rekamMedik'));
    }

    public function show($id)
    {
        $rekamMedik = RekamMedik::with(['pasien', 'kunjungan'])->findOrFail($id);
        return view('rekam.show', compact('rekamMedik'));
    }
}
