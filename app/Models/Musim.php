<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musim extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'musim';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'nama_musim',
    ];

    // Contoh relasi jika nanti digunakan (opsional)
    // Satu musim bisa punya banyak rekomendasi tanam
    public function rekomendasiTanam()
    {
        return $this->hasMany(RekomendasiTanam::class, 'musim_id');
    }
}
