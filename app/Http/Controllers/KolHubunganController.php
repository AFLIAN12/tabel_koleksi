<?php

namespace App\Http\Controllers;

use App\Models\KolHubungan;
use Illuminate\Http\Request;

class KolHubunganController extends Controller
{
    /**
     * Menampilkan semua data hubungan.
     */
    public function index()
    {
        return response()->json(KolHubungan::all());
    }

    /**
     * Menyimpan data hubungan baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_hubungan' => 'required|string|max:50',
        ]);

        $data = KolHubungan::create([
            'nama_hubungan' => $request->nama_hubungan,
        ]);

        return response()->json($data, 201);
    }

    /**
     * Menampilkan data berdasarkan ID.
     */
    public function show($id)
    {
        $data = KolHubungan::find($id);

        if (!$data) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        return response()->json($data);
    }

    /**
     * Memperbarui data berdasarkan ID.
     */
    public function update(Request $request, $id)
    {
        $data = KolHubungan::find($id);

        if (!$data) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        $request->validate([
            'nama_hubungan' => 'required|string|max:50',
        ]);

        $data->update([
            'nama_hubungan' => $request->nama_hubungan,
        ]);

        return response()->json($data);
    }

    /**
     * Menghapus data berdasarkan ID.
     */
    public function destroy($id)
    {
        $data = KolHubungan::find($id);

        if (!$data) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        $data->delete();

        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}
