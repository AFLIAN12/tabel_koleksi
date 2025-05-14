<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KolJurusan;

class KolJurusanController extends Controller
{
    public function index()
    {
        return response()->json(KolJurusan::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id_jurusan' => 'required|integer',
            'nama_jurusan' => 'required|string|max:100',
            'id_kajur' => 'required|integer',
            'id_sekjur' => 'required|integer',
            'visi' => 'required|string',
            'misi' => 'required|string',
        ]);

        $jurusan = KolJurusan::create($data);
        return response()->json(['message' => 'Data jurusan berhasil ditambahkan.', 'data' => $jurusan], 201);
    }

    public function show($id)
    {
        return response()->json(KolJurusan::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $jurusan = KolJurusan::findOrFail($id);
        $data = $request->validate([
            'nama_jurusan' => 'sometimes|string|max:100',
            'id_kajur' => 'sometimes|integer',
            'id_sekjur' => 'sometimes|integer',
            'visi' => 'sometimes|string',
            'misi' => 'sometimes|string',
        ]);
        $jurusan->update($data);
        return response()->json(['message' => 'Data jurusan berhasil diperbarui.', 'data' => $jurusan]);
    }

    public function destroy($id)
    {
        $jurusan = KolJurusan::findOrFail($id);
        $jurusan->delete();
        return response()->json(['message' => 'Data jurusan berhasil dihapus.']);
    }
}
