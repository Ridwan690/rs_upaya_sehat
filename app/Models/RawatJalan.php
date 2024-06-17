<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawatJalan extends Model
{
    use HasFactory;

    protected $table = 'rawat_jalan';

    protected $fillable = [
        'id_rekammedik',
        'kunjungan_count',
        'catatan',
    ];

    public function rekammedik()
    {
        return $this->belongsTo(RekamMedik::class, 'id_rekammedik');
    }

    public function antrian()
    {
        return $this->hasOne(Antrian::class, 'id_rawat_jalan');
    }
    public function obat()
    {
        return $this->belongsToMany(Obat::class, 'rawat_jalan_obat')
                    ->withPivot('jumlah', 'harga_total')
                    ->withTimestamps();
    }
}
