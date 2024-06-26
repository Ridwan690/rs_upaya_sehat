<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Antrian;
use App\Models\Kunjungan;
use App\Models\RawatJalan;
use App\Models\RawatInap;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index()
    {
        $today = Carbon::today();

        $jumlahKunjungan = Kunjungan::whereDate('created_at', $today)->count();
        $jumlahRawatJalan = RawatJalan::whereDate('created_at', $today)->count();
        $jumlahRawatInap = RawatInap::whereDate('created_at', $today)->count();
        $antrian = Antrian::whereDate('created_at', $today)->count();

        return view('admin.dashboard', compact('antrian', 'jumlahKunjungan', 'jumlahRawatJalan', 'jumlahRawatInap'));
    }
    // public function daftar()
    // {
    //     return view('form.daftar');
    // }
}
