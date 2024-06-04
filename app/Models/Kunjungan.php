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
        'perawat_id',
        'tanggal',
        'poli',
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

    public function perawat()
    {
        return $this->belongsTo(Perawat::class);
    }
}
