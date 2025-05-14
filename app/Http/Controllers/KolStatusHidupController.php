<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KolStatusHidup;

class KolStatusHidupController extends Controller
{
    public function index()
    {
        return response()->json(KolStatusHidup::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id_status_hidup' => 'required|string|max:1',
            'nama_status_hidup' => 'nullable|string|max:50',
        ]);

        $status = KolStatusHidup::create($data);
        return response()->json(['message' => 'Data status hidup berhasil ditambahkan.', 'data' => $status], 201);
    }

    public function show($id)
    {
        return response()->json(KolStatusHidup::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $status = KolStatusHidup::findOrFail($id);
        $data = $request->validate([
            'nama_status_hidup' => 'nullable|string|max:50',
        ]);
        $status->update($data);
        return response()->json(['message' => 'Data status hidup berhasil diperbarui.', 'data' => $status]);
    }

    public function destroy($id)
    {
        $status = KolStatusHidup::findOrFail($id);
        $status->delete();
        return response()->json(['message' => 'Data status hidup berhasil dihapus.']);
    }
}
