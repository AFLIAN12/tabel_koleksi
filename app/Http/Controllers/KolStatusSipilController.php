<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KolStatusSipil;

class KolStatusSipilController extends Controller
{
    public function index()
    {
        return response()->json(KolStatusSipil::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id_status_sipil' => 'required|string|max:1',
            'nama_status_sipil' => 'nullable|string|max:50',
        ]);

        $status = KolStatusSipil::create($data);
        return response()->json(['message' => 'Data status sipil berhasil ditambahkan.', 'data' => $status], 201);
    }

    public function show($id)
    {
        return response()->json(KolStatusSipil::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $status = KolStatusSipil::findOrFail($id);
        $data = $request->validate([
            'nama_status_sipil' => 'nullable|string|max:50',
        ]);
        $status->update($data);
        return response()->json(['message' => 'Data status sipil berhasil diperbarui.', 'data' => $status]);
    }

    public function destroy($id)
    {
        $status = KolStatusSipil::findOrFail($id);
        $status->delete();
        return response()->json(['message' => 'Data status sipil berhasil dihapus.']);
    }
}
