<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawatInap extends Model
{
    use HasFactory;
    protected $table = 'rawat_inap';

    protected $fillable = [
        'id_rekammedik',
        'id_kamar',
        'tanggal_masuk',
        'tanggal_keluar',
        'status',
        'catatan',
    ];

    public function rekammedik()
    {
        return $this->belongsTo(RekamMedik::class , 'id_rekammedik');
    }
    public function kamar()
    {
        return $this->belongsTo(Kamar::class , 'id_kamar');
    }
}
