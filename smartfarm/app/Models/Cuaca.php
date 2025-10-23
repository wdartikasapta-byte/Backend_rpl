<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuaca extends Model
{
    
    protected $fillable = ['kota','tanggal','suhu','kelembapan','kondisi'];

} 