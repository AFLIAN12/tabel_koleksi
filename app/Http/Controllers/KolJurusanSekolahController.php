<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KolJurusanSekolah;

class KolJurusanSekolahController extends Controller
{
    public function index()
    {
        return response()->json(KolJurusanSekolah::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id_jurusan_sekolah' => 'required|string|max:50',
            'nama' => 'nullable|string|max:50',
            'nama_jurusan' => 'nullable|string|max:100',
            'aktif' => 'in:Y,N',
        ]);

        $jurusanSekolah = KolJurusanSekolah::create($data);
        return response()->json(['message' => 'Data jurusan sekolah berhasil ditambahkan.', 'data' => $jurusanSekolah], 201);
    }

    public function show($id)
    {
        return response()->json(KolJurusanSekolah::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $jurusanSekolah = KolJurusanSekolah::findOrFail($id);
        $data = $request->validate([
            'nama' => 'nullable|string|max:50',
            'nama_jurusan' => 'nullable|string|max:100',
            'aktif' => 'in:Y,N',
        ]);
        $jurusanSekolah->update($data);
        return response()->json(['message' => 'Data jurusan sekolah berhasil diperbarui.', 'data' => $jurusanSekolah]);
    }

    public function destroy($id)
    {
        $jurusanSekolah = KolJurusanSekolah::findOrFail($id);
        $jurusanSekolah->delete();
        return response()->json(['message' => 'Data jurusan sekolah berhasil dihapus.']);
    }
}
