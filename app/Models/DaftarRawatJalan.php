<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarRawatJalan extends Model
{
    use HasFactory;

    protected $table = 'daftar_rawat_jalan';

    protected $fillable = [
        'rekam_medik_id',
        'jadwal_id',
        // 'antrian_id',
        // 'tanggal',
        // 'waktu_daftar',
    ];
}
