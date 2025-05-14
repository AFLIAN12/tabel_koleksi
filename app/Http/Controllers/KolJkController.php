<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KolJk;

class KolJkController extends Controller
{
    public function index()
    {
        return response()->json(KolJk::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_jk' => 'required|string',
            'ket' => 'required|string|max:15',
        ]);

        $jk = KolJk::create($data);
        return response()->json(['message' => 'Data jenis kelamin berhasil ditambahkan.', 'data' => $jk], 201);
    }

    public function show($id)
    {
        return response()->json(KolJk::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $jk = KolJk::findOrFail($id);
        $data = $request->validate([
            'nama_jk' => 'sometimes|string',
            'ket' => 'sometimes|string|max:15',
        ]);
        $jk->update($data);
        return response()->json(['message' => 'Data jenis kelamin berhasil diperbarui.', 'data' => $jk]);
    }

    public function destroy($id)
    {
        $jk = KolJk::findOrFail($id);
        $jk->delete();
        return response()->json(['message' => 'Data jenis kelamin berhasil dihapus.']);
    }
}
