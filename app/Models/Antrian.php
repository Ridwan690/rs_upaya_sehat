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
        'id_rawat_jalan',
        'nomor_antrian',
        'nomor_rawat_jalan',
        'kode_antrian',
    ];

    public function poli()
    {
        return $this->belongsTo(Poli::class, 'id_poli');
    }
    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id_dokter');
    }
    public function kunjungan()
    {
        return $this->belongsTo(Kunjungan::class , 'id_kunjungan');
    }
    public function rawatJalan()
    {
        return $this->belongsTo(RawatJalan::class , 'id_rawat_jalan');
    }
}
