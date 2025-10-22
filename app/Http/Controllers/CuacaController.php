<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuaca;

class CuacaController extends Controller
{
    /**
     * Tampilkan semua data cuaca, bisa filter berdasarkan kota
     */
    public function index(Request $request)
    {
        \Log::info('CuacaController@index dipanggil');

        $kota_id = $request->query('kota_id'); // opsional filter berdasarkan kota
        $query = Cuaca::with('kota');

        if ($kota_id) {
            $query->where('kota_id', $kota_id);
        }

        return response()->json($query->orderBy('tanggal')->get());
    }

    /**
     * Tambah data cuaca baru
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kota_id' => 'required|integer',
            'tanggal' => 'required|date',
            'suhu_min' => 'required|numeric',
            'suhu_max' => 'required|numeric',
            'kelembaban' => 'required|integer',
            'curah_hujan' => 'required|numeric',
            'angin' => 'required|string',
        ]);

        $cuaca = Cuaca::create($validated);

        return response()->json($cuaca, 201);
    }

    /**
     * Tampilkan data cuaca berdasarkan ID
     */
    public function show($id)
    {
        $cuaca = Cuaca::with('kota')->findOrFail($id);
        return response()->json($cuaca);
    }

    /**
     * Update data cuaca
     */
    public function update(Request $request, $id)
    {
        $cuaca = Cuaca::findOrFail($id);

        $validated = $request->validate([
            'kota_id' => 'integer',
            'tanggal' => 'date',
            'suhu_min' => 'numeric',
            'suhu_max' => 'numeric',
            'kelembaban' => 'integer',
            'curah_hujan' => 'numeric',
            'angin' => 'string',
        ]);

        $cuaca->update($validated);

        return response()->json($cuaca, 200);
    }

    /**
     * Hapus data cuaca
     */
    public function destroy($id)
    {
        Cuaca::destroy($id);
        return response()->json(null, 204);
    }
}
