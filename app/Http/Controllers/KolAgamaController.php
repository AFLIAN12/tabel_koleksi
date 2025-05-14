<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KolAgama;

class KolAgamaController extends Controller
{
    public function index()
    {
        return response()->json(KolAgama::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id_agama' => 'required|integer',
            'nama_agama' => 'required|string|max:100',
            'id_feeder' => 'nullable|integer',
        ]);

        $agama = KolAgama::create($data);
        return response()->json(['message' => 'Data agama berhasil ditambahkan.', 'data' => $agama], 201);
    }

    public function show($id)
    {
        return response()->json(KolAgama::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $agama = KolAgama::findOrFail($id);
        $data = $request->validate([
            'nama_agama' => 'sometimes|string|max:100',
            'id_feeder' => 'nullable|integer',
        ]);
        $agama->update($data);
        return response()->json(['message' => 'Data agama berhasil diperbarui.', 'data' => $agama]);
    }

    public function destroy($id)
    {
        $agama = KolAgama::findOrFail($id);
        $agama->delete();
        return response()->json(['message' => 'Data agama berhasil dihapus.']);
    }
}
