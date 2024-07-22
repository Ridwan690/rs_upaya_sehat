<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kamar = Kamar::orderBy('id', 'asc')->paginate(10);
        return view('kamar.index', compact('kamar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kamar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'kode_kamar' => 'required',
        'tipe_kamar' => 'required',
    ]);

    $kamar = new Kamar();
    $kamar->kode_kamar = $request->kode_kamar;
    $kamar->tipe_kamar = $request->tipe_kamar;

    switch ($request->tipe_kamar) {
        case 'VIP':
            $kamar->kapasitas = 1;
            $kamar->harga = 300000;
            break;
        case 'Kelas 1':
            $kamar->kapasitas = 2;
            $kamar->harga = 200000;
            break;
        case 'Kelas 2':
            $kamar->kapasitas = 4;
            $kamar->harga = 150000;
            break;
        case 'Kelas 3':
            $kamar->kapasitas = 6;
            $kamar->harga = 100000;
            break;
    }

    $kamar->save();
    return redirect()->route('kamar.index')
        ->with('success', 'Kamar created successfully.');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kamar = Kamar::find($id);
        return view('kamar.show', compact('kamar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kamar = Kamar::find($id);
        return view('kamar.edit', compact('kamar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_kamar' => 'required',
            'tipe_kamar' => 'required',
        ]);

        $kamar = Kamar::find($id);
        $kamar->kode_kamar = $request->kode_kamar;
        $kamar->tipe_kamar = $request->tipe_kamar;

        switch ($request->tipe_kamar) {
            case 'VIP':
                $kamar->kapasitas = 1;
                $kamar->harga = 300000;
                break;
            case 'Kelas 1':
                $kamar->kapasitas = 2;
                $kamar->harga = 200000;
                break;
            case 'Kelas 2':
                $kamar->kapasitas = 4;
                $kamar->harga = 150000;
                break;
            case 'Kelas 3':
                $kamar->kapasitas = 6;
                $kamar->harga = 100000;
                break;
        }

        $kamar->save();
        return redirect()->route('kamar.index')
        ->with('success', 'Kamar created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kamar = Kamar::find($id);
        $kamar->delete();
        return redirect()->route('kamar.index');
    }
}
