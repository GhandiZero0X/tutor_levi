<?php

namespace Database\Seeders;

// database/seeders/JadwalHarianSeeder.php

use Illuminate\Database\Seeder;
use App\Models\Catatan;
use App\Models\Mahasiswa;

class JadwalHarianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get the Mahasiswa ID for the foreign key reference
        $mahasiswaId = Mahasiswa::first()->id;

        Catatan::create([
            'mahasiswa_id' => $mahasiswaId,
            'HARI' => now(),
            'KEGIATAN' => 'Study',
        ]);

        // You can add more JadwalHarian records here if needed
    }
}

