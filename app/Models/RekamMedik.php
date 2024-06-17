<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekamMedik extends Model
{
    use HasFactory;

    protected $table = 'rekammedik';

    protected $fillable = [
        'pasien_id',
        'no_rekam_medik',
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }

    public function kunjungan()
    {
        return $this->hasMany(Kunjungan::class);
    }

    public function rawatJalan()
    {
        return $this->hasMany(RawatJalan::class, 'id_rekammedik');
    }

    public function rawatInap()
    {
        return $this->hasMany(RawatInap::class, 'id_rekammedik');
    }
}
