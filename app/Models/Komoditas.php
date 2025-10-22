<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komoditas extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'komoditas';

    // Kolom yang bisa diisi (mass assignable)
    protected $fillable = [
        'nama_komoditas',
    ];

    // Relasi: satu komoditas bisa punya banyak rekomendasi tanam
    public function rekomendasiTanam()
    {
        return $this->hasMany(RekomendasiTanam::class, 'komoditas_id');
    }
}
