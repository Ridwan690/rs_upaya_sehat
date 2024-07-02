<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PercetakanGelang extends Model
{
    use HasFactory;
    protected $table = 'percetakan_gelang';
    protected $fillable = [
        'rawat_inap_id',
        'warna_gelang',
    ];

    public function rawatInap()
    {
        return $this->belongsTo(RawatInap::class);
    }
}
