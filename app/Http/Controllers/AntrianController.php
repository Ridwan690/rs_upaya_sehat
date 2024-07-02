<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class AntrianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->poli_id) {
            $poliId = Auth::user()->poli_id;

            // Ambil antrian yang sesuai dengan poli_id tersebut dan status belum ditangani
            $antrian = Antrian::where('id_poli', $poliId)
                              ->where('status', '!=', 'ditangani')
                              ->oldest()
                              ->paginate(10);
        } else {
            // Ambil semua antrian dengan status belum ditangani
            $antrian = Antrian::where('status', '!=', 'ditangani')
                              ->orderBy('kode_antrian', 'desc')
                              ->paginate(10);
        }

        return view('antrian.index', compact('antrian'));
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
        // Update kolom status menjadi 'ditangani'
        $antrian->status = 'ditangani';
        $antrian->save();

        // Redirect ke halaman antrian.index dengan pesan sukses
        return redirect()->route('antrian.index')->with('success', 'Antrian telah ditangani.');
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
