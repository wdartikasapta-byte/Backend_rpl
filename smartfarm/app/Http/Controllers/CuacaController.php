<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuaca; // ✅ ini wajib ada

class CuacaController extends Controller
{
    public function index()
    {
        return view('cuaca');
    }

    public function cari(Request $request)
    {
        $dataCuaca = Cuaca::where('kota', $request->kota)
            ->whereDate('tanggal', $request->tanggal)
            ->first();

        return view('cuaca', compact('dataCuaca'));
    }
}
