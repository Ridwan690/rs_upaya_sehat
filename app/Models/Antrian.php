<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;

    protected $table = 'antrian';

    protected $fillable = [
        'id_poli',
        'id_dokter',
        'id_kunjungan',
        'nomor_antrian',
        'nomor_rawat_jalan',
        'kode_antrian',
    ];

    public function poli()
    {
        return $this->belongsTo(Poli::class);
    }
    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }
    public function kunjungan()
    {
        return $this->belongsTo(Kunjungan::class);
    }
}
