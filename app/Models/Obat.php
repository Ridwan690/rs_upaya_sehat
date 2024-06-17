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

    public function rawatJalan()
    {
        return $this->belongsToMany(RawatJalan::class, 'rawat_jalan_obat')
                    ->withPivot('jumlah', 'harga_total')
                    ->withTimestamps();
    }
}
