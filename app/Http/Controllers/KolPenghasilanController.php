<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KolPenghasilan;

class KolPenghasilanController extends Controller
{
    public function index()
    {
        return response()->json(KolPenghasilan::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id_penghasilan' => 'required|integer',
            'nama_penghasilan' => 'nullable|string|max:30',
        ]);

        $penghasilan = KolPenghasilan::create($data);
        return response()->json(['message' => 'Data penghasilan berhasil ditambahkan.', 'data' => $penghasilan], 201);
    }

    public function show($id)
    {
        return response()->json(KolPenghasilan::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $penghasilan = KolPenghasilan::findOrFail($id);
        $data = $request->validate([
            'nama_penghasilan' => 'nullable|string|max:30',
        ]);
        $penghasilan->update($data);
        return response()->json(['message' => 'Data penghasilan berhasil diperbarui.', 'data' => $penghasilan]);
    }

    public function destroy($id)
    {
        $penghasilan = KolPenghasilan::findOrFail($id);
        $penghasilan->delete();
        return response()->json(['message' => 'Data penghasilan berhasil dihapus.']);
    }
}
