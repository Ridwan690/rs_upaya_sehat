<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perawat extends Model
{
    use HasFactory;

    protected $table = 'perawat';

    protected $fillable = [
        'nama',
        'jabatan',
        'id_poli',
    ];
    public function poli()
    {
        return $this->belongsTo(Poli::class, 'id_poli');
    }
}
