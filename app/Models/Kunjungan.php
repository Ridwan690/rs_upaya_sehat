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
        return $this->hasOne(Antrian::class, 'id_kunjungan');
    }
    public function obat()
    {
        return $this->belongsToMany(Obat::class, 'kunjungan_obat')
                    ->withPivot(['takaran'])
                    ->withTimestamps();
    }
    public function tarif()
    {
        return $this->belongsToMany(Tarif::class, 'tarif_kunjungan')->withTimestamps();
    }
    public function totalHarga()
    {
        return $this->hasOne(TotalHarga::class, 'kunjungan_id');
    }
}
