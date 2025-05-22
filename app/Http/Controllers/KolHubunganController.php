<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KolHubungan;

class KolHubunganController extends Controller
{
    public function index()
    {
        return response()->json(KolHubungan::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id_hubungan' => 'required|integer',
            'nama_hubungan' => 'required|string|max:100',
        ]);
        $hubungan = KolHubungan::create($data);
        return response()->json(['message' => 'Data hubungan berhasil ditambahkan.', 'data' => $hubungan], 201);
    }

    public function show($id)
    {
        return response()->json(KolHubungan::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $hubungan = KolHubungan::findOrFail($id);
        $data = $request->validate([
            'nama_hubungan' => 'sometimes|string|max:100',
        ]);
        $hubungan->update($data);
        return response()->json(['message' => 'Data hubungan berhasil diperbarui.', 'data' => $hubungan]);
    }

    public function destroy($id)
    {
        $hubungan = KolHubungan::findOrFail($id);
        $hubungan->delete();
        return response()->json(['message' => 'Data hubungan berhasil dihapus.']);
    }
}