<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
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
        return view('pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
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

        Pasien::create($request->all());

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
