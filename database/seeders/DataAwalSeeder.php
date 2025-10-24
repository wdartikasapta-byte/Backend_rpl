<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataAwalSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('musim')->insert([
            ['nama_musim' => 'Musim Hujan'],
            ['nama_musim' => 'Musim Kemarau'],
        ]);

        DB::table('komoditas')->insert([
            ['nama_komoditas' => 'Padi'],
            ['nama_komoditas' => 'Jagung'],
            ['nama_komoditas' => 'Kedelai'],
        ]);

        DB::table('lahan')->insert([
            ['nama_lahan' => 'Lahan A', 'lokasi' => 'Konawe', 'luas' => 2.5],
            ['nama_lahan' => 'Lahan B', 'lokasi' => 'Kendari', 'luas' => 3.1],
            ['nama_lahan' => 'Lahan C', 'lokasi' => 'Kolaka', 'luas' => 1.8],
        ]);
    }
}
