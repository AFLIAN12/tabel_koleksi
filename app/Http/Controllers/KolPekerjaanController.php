<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KolPekerjaan;

class KolPekerjaanController extends Controller
{
    public function index()
    {
        return response()->json(KolPekerjaan::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id_pekerjaan' => 'required|string|max:1',
            'nama_pekerjaan' => 'nullable|string|max:50',
        ]);

        $pekerjaan = KolPekerjaan::create($data);
        return response()->json(['message' => 'Data pekerjaan berhasil ditambahkan.', 'data' => $pekerjaan], 201);
    }

    public function show($id)
    {
        return response()->json(KolPekerjaan::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $pekerjaan = KolPekerjaan::findOrFail($id);
        $data = $request->validate([
            'nama_pekerjaan' => 'nullable|string|max:50',
        ]);
        $pekerjaan->update($data);
        return response()->json(['message' => 'Data pekerjaan berhasil diperbarui.', 'data' => $pekerjaan]);
    }

    public function destroy($id)
    {
        $pekerjaan = KolPekerjaan::findOrFail($id);
        $pekerjaan->delete();
        return response()->json(['message' => 'Data pekerjaan berhasil dihapus.']);
    }
}
