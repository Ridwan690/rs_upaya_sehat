<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class AntrianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $sortColumn = $request->input('sort', 'kode_antrian'); // Default sort by 'nama'
        $sortOrder = $request->input('order', 'asc'); // Default sort order 'asc'

        $antrian = Antrian::with(['kunjungan.rekamMedikUtama.pasien', 'poli', 'dokter'])
                        ->orderBy($sortColumn, $sortOrder)
                        ->paginate(10);

        return view('antrian.index', compact('antrian', 'sortColumn', 'sortOrder'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Antrian $antrian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Antrian $antrian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Antrian $antrian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Antrian $antrian)
    {
        //
    }

    public function print($id)
    {
        $queue = Antrian::find($id);
        $pdf = PDF::loadView('antrian.print', compact('queue'))->setPaper('B7', 'landscape');
        return $pdf->stream('antrian.pdf');
    }
}
