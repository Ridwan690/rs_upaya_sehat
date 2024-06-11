<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $table = 'dokter';

    protected $fillable = [
        'nama',
        'spesialis',
        'id_poli',
    ];
    public function kunjungan()
    {
        return $this->hasOne(Kunjungan::class);
    }

    public function antrian()
    {
        return $this->hasOne(Antrian::class);
    }
    public function poli()
    {
        return $this->belongsTo(Poli::class);
    }
    // public function jadwal()
    // {
    //     return $this->hasMany(Jadwal::class);
    // }
}
