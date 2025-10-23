<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {DB::table('komoditas')->insert([
        ['nama_komoditas' => 'Padi'],
        ['nama_komoditas' => 'Jagung'],
        ['nama_komoditas' => 'Cabai'],
        ['nama_komoditas' => 'Tomat'],
    ]);

    DB::table('lahans')->insert([
        ['tipe_lahan' => 'Sawah'],
        ['tipe_lahan' => 'Tegalan'],
        ['tipe_lahan' => 'Greenhouse'],
    ]);

    DB::table('musims')->insert([
        ['nama_musim' => 'Hujan'],
        ['nama_musim' => 'Kemarau'],
    ]);

    DB::table('cuacas')->insert([
        ['kota' => 'Kendari', 'tanggal' => '2025-10-23', 'suhu' => 30.5, 'kelembapan' => 80, 'kondisi' => 'Cerah Berawan'],
        ['kota' => 'Baubau', 'tanggal' => '2025-10-23', 'suhu' => 31.2, 'kelembapan' => 78, 'kondisi' => 'Hujan Ringan'],
    ]);
        
        
    }
}
