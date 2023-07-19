<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catatan extends Model
{
    use HasFactory;

    protected $table = 'jadwalharian';

    protected $fillable = [
        'hari',
        'kegiatan',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function tugas()
    {
        return $this->hasMany(Tugas::class, 'jadwalharian_id', 'id');
    }
}
