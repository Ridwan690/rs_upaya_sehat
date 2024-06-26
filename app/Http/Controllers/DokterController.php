<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Poli;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dokter = Dokter::orderBy('id')->paginate(10);
        $poli = Poli::all();
        return view('dokter.index', compact('dokter', 'poli'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $poli = Poli::all();
        return view('dokter.create', compact('poli'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'spesialis' => 'required',
            'id_poli' => 'required|exists:poli,id',
        ]);

        Dokter::create($request->all());

        return redirect()->route('dokter.index')
            ->with('success', 'Dokter berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dokter $dokter)
    {
        return view('dokter.show', compact('dokter'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dokter $dokter)
    {
        $poli = Poli::all();
        return view('dokter.edit', compact('dokter', 'poli'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dokter $dokter)
    {
        $request->validate([
            'nama' => 'required',
            'spesialis' => 'required',
            'id_poli' => 'required|exists:poli,id',
        ]);

        $dokter->update($request->all());

        return redirect()->route('dokter.index')
            ->with('success', 'Dokter berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dokter $dokter)
    {
        $dokter->delete();

        return redirect()->route('dokter.index')
            ->with('success', 'Dokter berhasil dihapus');
    }

    public function getDokterByPoli($poli_id)
    {
        $dokters = Dokter::where('id_poli', $poli_id)->get();
        return response()->json($dokters);
    }
}