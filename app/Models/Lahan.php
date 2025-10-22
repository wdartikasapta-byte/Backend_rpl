<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lahan extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'lahan';

    // Kolom yang bisa diisi
    protected $fillable = [
        'nama_lahan',
    ];

    // Relasi: satu lahan bisa punya banyak rekomendasi tanam
    public function rekomendasiTanam()
    {
        return $this->hasMany(RekomendasiTanam::class, 'lahan_id');
    }
}
