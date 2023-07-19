<?php

namespace Database\Seeders;

// database/seeders/PengingatSeeder.php

use Illuminate\Database\Seeder;
use App\Models\Pengingat;
use App\Models\Mahasiswa;

class PengingatSeeder extends Seeder
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

        Pengingat::create([
            'mahasiswa_id' => $mahasiswaId,
            'TANGGAL_PENGINGAT' => now(),
            'KETERANGAN' => 'Meeting',
            'JUDUL_PENGINGAT' => 'Reminder',
        ]);

        // You can add more Pengingat records here if needed
    }
}

