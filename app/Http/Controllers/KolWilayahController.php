<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KolWilayah;

class KolWilayahController extends Controller
{
    public function index()
    {
        return response()->json(KolWilayah::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id_wil' => 'required|string|max:8',
            'nm_wil' => 'required|string|max:50',
            'id_induk_wilayah' => 'nullable|string|max:50',
            'id_level_wil' => 'required|integer',
        ]);

        $wilayah = KolWilayah::create($data);
        return response()->json(['message' => 'Data wilayah berhasil ditambahkan.', 'data' => $wilayah], 201);
    }

    public function show($id)
    {
        return response()->json(KolWilayah::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $wilayah = KolWilayah::findOrFail($id);
        $data = $request->validate([
            'nm_wil' => 'sometimes|string|max:50',
            'id_induk_wilayah' => 'nullable|string|max:50',
            'id_level_wil' => 'sometimes|integer',
        ]);
        $wilayah->update($data);
        return response()->json(['message' => 'Data wilayah berhasil diperbarui.', 'data' => $wilayah]);
    }

    public function destroy($id)
    {
        $wilayah = KolWilayah::findOrFail($id);
        $wilayah->delete();
        return response()->json(['message' => 'Data wilayah berhasil dihapus.']);
    }
}
