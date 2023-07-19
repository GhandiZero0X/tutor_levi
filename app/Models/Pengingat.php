<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengingat extends Model
{
    use HasFactory;

    protected $table = 'pengingat';
    protected $fillable = [
        'mahasiswa_id',
        'TANGGAL_PENGINGAT',
        'KETERANGAN',
        'JUDUL_PENGINGAT',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id');
    }

    public function jadwalHarian()
    {
        return $this->belongsTo(JadwalHarian::class, 'jadwalharian_id');
    }
}
