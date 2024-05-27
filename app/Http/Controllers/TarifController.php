<?php

namespace App\Http\Controllers;

use App\Models\Tarif;
use Illuminate\Http\Request;

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
}
