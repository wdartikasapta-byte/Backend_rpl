<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekomendasiTanam extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'rekomendasi_tanam';
    protected $fillable = [
        'musim_id',
        'komoditas_id',
        'lahan_id',
        'judul',
        'deskripsi',
    ];

    // Relasi ke tabel musim
    public function musim()
    {
        return $this->belongsTo(Musim::class, 'musim_id');
    }

    // Relasi ke tabel komoditas
    public function komoditas()
    {
        return $this->belongsTo(Komoditas::class, 'komoditas_id');
    }

    // Relasi ke tabel lahan
    public function lahan()
    {
        return $this->belongsTo(Lahan::class, 'lahan_id');
    }
}
