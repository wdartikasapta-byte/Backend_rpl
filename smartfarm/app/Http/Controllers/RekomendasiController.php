<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Rekomendasi;
use App\Models\Komoditas;
use App\Models\Lahan;
use App\Models\Musim;
class RekomendasiController extends Controller
{
    public function index()
    {
        $komoditas = Komoditas::all();
        $lahan = Lahan::all();
        $musim = Musim::all();
        return view('rekomendasi', compact('komoditas','lahan','musim'));
    }

    public function cari(Request $request)
    {
        $hasil = Rekomendasi::where('komoditas_id', $request->komoditas)
            ->where('lahan_id', $request->lahan)
            ->where('musim_id', $request->musim)
            ->first();

        return view('rekomendasi', [
            'hasil' => $hasil,
            'komoditas' => Komoditas::all(),
            'lahan' => Lahan::all(),
            'musim' => Musim::all(),
        ]);
    }
}
