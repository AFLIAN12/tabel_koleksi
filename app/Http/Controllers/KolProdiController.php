<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KolProdi;

class KolProdiController extends Controller
{
    public function index()
    {
        return response()->json(KolProdi::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id_prodi' => 'required|integer',
            'kode_prodi' => 'required|string|max:11',
            'id_prodi_bppp' => 'required|string|max:6',
            'id_jurusan' => 'required|integer',
            'nama_prodi' => 'required|string|max:100',
            'nama_konsentrasi' => 'required|string|max:100',
            'bidang' => 'required|string|max:100',
            'singkatan' => 'required|string|max:100',
            'id_kaprodi' => 'required|integer',
            'jenjang' => 'required|string|max:5',
            'akreditasi' => 'nullable|string|max:100',
            'no_sk_dikti' => 'nullable|string|max:100',
            'tgl_sk_dikti' => 'nullable|date',
            'no_sk_ban' => 'nullable|string|max:100',
            'tgl_sk_ban' => 'nullable|date',
            'kadaluarsa_akreditasi' => 'required|date',
            'aktif' => 'required|in:Y,T',
            'no' => 'required|integer',
            'visi' => 'required|string',
            'misi' => 'required|string',
            'prefix' => 'required|string|max:3',
        ]);

        $prodi = KolProdi::create($data);
        return response()->json(['message' => 'Data prodi berhasil ditambahkan.', 'data' => $prodi], 201);
    }

    public function show($id)
    {
        return response()->json(KolProdi::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $prodi = KolProdi::findOrFail($id);
        $data = $request->validate([
            'kode_prodi' => 'sometimes|string|max:11',
            'id_prodi_bppp' => 'sometimes|string|max:6',
            'id_jurusan' => 'sometimes|integer',
            'nama_prodi' => 'sometimes|string|max:100',
            'nama_konsentrasi' => 'sometimes|string|max:100',
            'bidang' => 'sometimes|string|max:100',
            'singkatan' => 'sometimes|string|max:100',
            'id_kaprodi' => 'sometimes|integer',
            'jenjang' => 'sometimes|string|max:5',
            'akreditasi' => 'nullable|string|max:100',
            'no_sk_dikti' => 'nullable|string|max:100',
            'tgl_sk_dikti' => 'nullable|date',
            'no_sk_ban' => 'nullable|string|max:100',
            'tgl_sk_ban' => 'nullable|date',
            'kadaluarsa_akreditasi' => 'sometimes|date',
            'aktif' => 'sometimes|in:Y,T',
            'no' => 'sometimes|integer',
            'visi' => 'sometimes|string',
            'misi' => 'sometimes|string',
            'prefix' => 'sometimes|string|max:3',
        ]);
        $prodi->update($data);
        return response()->json(['message' => 'Data prodi berhasil diperbarui.', 'data' => $prodi]);
    }

    public function destroy($id)
    {
        $prodi = KolProdi::findOrFail($id);
        $prodi->delete();
        return response()->json(['message' => 'Data prodi berhasil dihapus.']);
    }
}
