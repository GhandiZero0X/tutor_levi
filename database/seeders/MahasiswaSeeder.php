<?php

namespace Database\Seeders;

// database/seeders/MahasiswaSeeder.php

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mahasiswa::create([
            'NAMA' => 'John Doe',
            'NIS' => '123456789',
            'ALAMAT' => '123 Street, City',
            'EMAIL' => 'john@example.com',
            'PASSWORD' => bcrypt('password'),
        ]);

        // You can add more Mahasiswa records here if needed
    }
}
