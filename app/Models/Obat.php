<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    protected $table = 'obat';

    protected $fillable = [
        'kode_obat',
        'nama_obat',
        'harga'
    ];

   public function kunjungan()
   {
        return $this->belongsToMany(kunjungan::class, 'kunjungan_obat')
            ->withPivot('takaran')
            ->withTimestamps();
   }
   public function rawatJalan()
   {
       return $this->belongsToMany(RawatJalan::class, 'rawat_jalan_obat')
                    ->withPivot('takaran')
                    ->withTimestamps();
   }
   public function rawatInap()
   {
        return $this->belongsToMany(RawatInap::class, 'rawat_inap_obat')
            ->withPivot('takaran')
            ->withTimestamps();
   }
}
