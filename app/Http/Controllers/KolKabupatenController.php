<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KolKabupaten;

class KolKabupatenController extends Controller
{
    public function index()
    {
        return response()->json(KolKabupaten::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id_kabupaten' => 'required|string|max:10',
            'nama_kabupaten' => 'nullable|string|max:50',
            'id_provinsi' => 'nullable|string|max:2',
        ]);

        $kabupaten = KolKabupaten::create($data);
        return response()->json(['message' => 'Data kabupaten berhasil ditambahkan.', 'data' => $kabupaten], 201);
    }

    public function show($id)
    {
        return response()->json(KolKabupaten::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $kabupaten = KolKabupaten::findOrFail($id);
        $data = $request->validate([
            'nama_kabupaten' => 'nullable|string|max:50',
            'id_provinsi' => 'nullable|string|max:2',
        ]);
        $kabupaten->update($data);
        return response()->json(['message' => 'Data kabupaten berhasil diperbarui.', 'data' => $kabupaten]);
    }

    public function destroy($id)
    {
        $kabupaten = KolKabupaten::findOrFail($id);
        $kabupaten->delete();
        return response()->json(['message' => 'Data kabupaten berhasil dihapus.']);
    }
}
