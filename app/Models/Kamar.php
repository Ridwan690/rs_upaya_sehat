<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $table = 'kamar';

    protected $fillable = [
        'kode_kamar',
        'tipe_kamar',
        'harga',
    ];

    public function rawatInap()
    {
        return $this->hasOne(RawatInap::class);
    }
}
