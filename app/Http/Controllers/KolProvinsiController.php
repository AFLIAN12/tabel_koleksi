<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KolProvinsi;

class KolProvinsiController extends Controller
{
    public function index()
    {
        return response()->json(KolProvinsi::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id_prov' => 'required|string|max:2',
            'nama_prov' => 'required|string|max:255',
        ]);

        $provinsi = KolProvinsi::create($data);
        return response()->json(['message' => 'Data provinsi berhasil ditambahkan.', 'data' => $provinsi], 201);
    }

    public function show($id)
    {
        return response()->json(KolProvinsi::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $provinsi = KolProvinsi::findOrFail($id);
        $data = $request->validate([
            'nama_prov' => 'sometimes|string|max:255',
        ]);
        $provinsi->update($data);
        return response()->json(['message' => 'Data provinsi berhasil diperbarui.', 'data' => $provinsi]);
    }

    public function destroy($id)
    {
        $provinsi = KolProvinsi::findOrFail($id);
        $provinsi->delete();
        return response()->json(['message' => 'Data provinsi berhasil dihapus.']);
    }
}
