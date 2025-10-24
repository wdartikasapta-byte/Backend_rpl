<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RekomendasiTanam;

class RekomendasiController extends Controller
{
    /**
     * Menampilkan semua data rekomendasi tanam (dapat difilter).
     */
    public function index(Request $request)
    {
        \Log::info('RekomendasiController@index dipanggil');

        $query = RekomendasiTanam::with(['musim', 'komoditas', 'lahan']);

        if ($request->has('musim_id')) {
            $query->where('musim_id', $request->musim_id);
        }

        if ($request->has('komoditas_id')) {
            $query->where('komoditas_id', $request->komoditas_id);
        }

        if ($request->has('lahan_id')) {
            $query->where('lahan_id', $request->lahan_id);
        }

        return response()->json($query->orderBy('id')->get());
    }

    /**
     * Menyimpan data baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'musim_id' => 'required|integer',
            'komoditas_id' => 'required|integer',
            'lahan_id' => 'required|integer',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        $rekom = RekomendasiTanam::create($validated);
        return response()->json($rekom, 201);
    }

    /**
     * Menampilkan data berdasarkan ID.
     */
    public function show($id)
    {
        $rekom = RekomendasiTanam::with(['musim', 'komoditas', 'lahan'])->findOrFail($id);
        return response()->json($rekom);
    }

    /**
     * Mengupdate data.
     */
    public function update(Request $request, $id)
    {
        $rekom = RekomendasiTanam::findOrFail($id);

        $validated = $request->validate([
            'musim_id' => 'integer',
            'komoditas_id' => 'integer',
            'lahan_id' => 'integer',
            'judul' => 'string|max:255',
            'deskripsi' => 'string',
        ]);

        $rekom->update($validated);
        return response()->json($rekom, 200);
    }

    /**
     * Menghapus data rekomendasi.
     */
    public function destroy($id)
    {
        RekomendasiTanam::destroy($id);
        return response()->json(null, 204);
    }
    public function getByFilter(Request $request)
{
    $lahanId = $request->query('lahan_id');
    $musimId = $request->query('musim_id');
    $komoditasId = $request->query('komoditas_id');

    $query = \App\Models\RekomendasiTanam::with(['lahan', 'musim', 'komoditas']);

    if ($lahanId) {
        $query->where('lahan_id', $lahanId);
    }
    if ($musimId) {
        $query->where('musim_id', $musimId);
    }
    if ($komoditasId) {
        $query->where('komoditas_id', $komoditasId);
    }

    $result = $query->get();

    if ($result->isEmpty()) {
        return response()->json([
            'message' => 'Tidak ada rekomendasi yang cocok dengan filter.'
        ], 404);
    }

    return response()->json($result);
}
}
