<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;

    protected $fillable = [
        'jadwalharian_id',
        'mahasiswa_id',
        'DESK_TUGAS',
        'TENGGAT_WAKTU',
        'STATUS',
        'CATATAN',
    ];

    public function jadwalHarian()
    {
        return $this->belongsTo(Catatan::class, 'jadwalharian_id', 'id');
    }


    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
}
