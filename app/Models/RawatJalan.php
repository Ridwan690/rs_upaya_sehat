<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawatJalan extends Model
{
    use HasFactory;

    protected $table = 'rawat_jalan';

    protected $fillable = [
        'id_kunjungan',
        'tanggal',
        'kunjungan_count',
        'rincian_perawatan',
    ];

    public function kunjungan()
    {
        return $this->belongsTo(Kunjungan::class, 'id_kunjungan');
    }
}
