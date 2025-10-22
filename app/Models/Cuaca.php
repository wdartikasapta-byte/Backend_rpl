<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuaca extends Model
{
    protected $table = 'cuaca';

    protected $fillable = [
        'kota_id', 'tanggal', 'suhu_min', 'suhu_max', 'kelembaban', 'curah_hujan', 'angin'
    ];

    // Jika tabel tidak punya created_at / updated_at
    public $timestamps = false;

    // Relasi ke tabel kota
    public function kota()
    {
        return $this->belongsTo(Kota::class);
    }
}
