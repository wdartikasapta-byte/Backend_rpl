<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $table = 'kota';
    protected $primaryKey = 'id';
    protected $fillable = ['nama'];
    public $timestamps = false;


    // relasi ke cuaca (optional, tapi bagus)
    public function cuaca() {
        return $this->hasMany(Cuaca::class, 'kota_id');
    }
}
