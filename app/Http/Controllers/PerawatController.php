<?php

namespace App\Http\Controllers;

use App\Models\Perawat;
use Illuminate\Http\Request;

class PerawatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perawat = Perawat::orderBy('id')->paginate(10);
        return view('perawat.index', compact('perawat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('perawat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
        ]);

        Perawat::create($request->all());

        return redirect()->route('perawat.index')
            ->with('success', 'Perawat berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Perawat $perawat)
    {
        return view('perawat.show', compact('perawat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Perawat $perawat)
    {
        return view('perawat.edit', compact('perawat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Perawat $perawat)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
        ]);

        $perawat->update($request->all());

        return redirect()->route('perawat.index')
            ->with('success', 'Perawat berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Perawat $perawat)
    {
        $perawat->delete();

        return redirect()->route('perawat.index')
            ->with('success', 'Perawat berhasil dihapus');
    }
}
