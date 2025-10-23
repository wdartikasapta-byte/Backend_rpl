<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rekomendasi extends Model
{
    protected $fillable = ['komoditas_id', 'lahan_id', 'musim_id', 'deskripsi'];

    public function komoditas() { return $this->belongsTo(Komoditas::class); }
    public function lahan() { return $this->belongsTo(Lahan::class); }
    public function musim() { return $this->belongsTo(Musim::class); }
}
