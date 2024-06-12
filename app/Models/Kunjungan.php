<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;

    protected $table = 'kunjungan';

    protected $fillable = [
        'rekam_medik_id',
        'dokter_id',
        'poli_id',
        'tanggal',
        'diagnosa',
        'tindakan',
    ];

    public function rekamMedikUtama()
    {
        return $this->belongsTo(RekamMedik::class, 'rekam_medik_id');
    }
    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }
    public function poli()
    {
        return $this->belongsTo(Poli::class);
    }
    public function antrian()
    {
        return $this->hasOne(Antrian::class);
    }
    public function rawatInap()
    {
        return $this->hasOne(RawatInap::class);
    }
    public function rawatJalan()
    {
        return $this->hasOne(RawatJalan::class);
    }
}
