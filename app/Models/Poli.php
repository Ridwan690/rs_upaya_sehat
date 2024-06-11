<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    use HasFactory;
    protected $table = 'poli';
    protected $fillable = [
        'kode_poli',
        'nama_poli',
    ];

    // public function jadwal()
    // {
    //     return $this->hasMany(Jadwal::class);
    // }
    public function dokter()
    {
        return $this->hasMany(Dokter::class);
    }
    public function perawat()
    {
        return $this->hasMany(Perawat::class);
    }
    public function kunjungan()
    {
        return $this->hasOne(kunjungan::class);
    }
    public function antrian()
    {
        return $this->hasOne(Antrian::class);
    }
}
