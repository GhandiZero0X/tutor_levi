<?php

namespace Database\Seeders;

// database/seeders/TugasSeeder.php

use Illuminate\Database\Seeder;
use App\Models\Tugas;
use App\Models\Catatan;
use App\Models\Mahasiswa;

class TugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get the JadwalHarian ID and Mahasiswa ID for the foreign key references
        $jadwalharian_id = Catatan::first()->id;
        $mahasiswaId = Mahasiswa::first()->id;

        Tugas::create([
            'jadwalharian_id' => $jadwalharian_id,
            'mahasiswa_id' => $mahasiswaId,
            'DESK_TUGAS' => 'Complete assignment',
            'TENGGAT_WAKTU' => now()->addDays(7),
            'STATUS' => false,
            'CATATAN' => null,
        ]);

        // You can add more Tugas records here if needed
    }
}

