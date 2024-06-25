<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    use HasFactory;

    protected $table = 'tarif';
    protected $fillable = ['nama_layanan', 'jenis_layanan', 'biaya'];

    public function kunjungan()
   {
       return $this->belongsToMany(Kunjungan::class, 'tarif_kunjungan')->withTimestamps();
   }
   public function rawatJalan()
   {
       return $this->belongsToMany(RawatJalan::class, 'tarif_rawat_jalan')->withTimestamps();
   }
   public function rawatInap()
   {
       return $this->belongsToMany(RawatInap::class, 'tarif_rawat_inap')->withTimestamps();
   }
}
