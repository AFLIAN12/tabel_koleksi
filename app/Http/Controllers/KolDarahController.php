<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KolDarah;

class KolDarahController extends Controller
{
    public function index()
    {
        return response()->json(KolDarah::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_darah' => 'required|string',
        ]);

        $darah = KolDarah::create($data);
        return response()->json(['message' => 'Data golongan darah berhasil ditambahkan.', 'data' => $darah], 201);
    }

    public function show($id)
    {
        return response()->json(KolDarah::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $darah = KolDarah::findOrFail($id);
        $data = $request->validate([
            'nama_darah' => 'sometimes|string',
        ]);
        $darah->update($data);
        return response()->json(['message' => 'Data golongan darah berhasil diperbarui.', 'data' => $darah]);
    }

    public function destroy($id)
    {
        $darah = KolDarah::findOrFail($id);
        $darah->delete();
        return response()->json(['message' => 'Data golongan darah berhasil dihapus.']);
    }
}
