<?php

namespace App\Http\Controllers;

use App\Models\KategoriUKT;
use App\Models\KolProdi;
use Illuminate\Http\Request;

class KategoriUKTController extends Controller
{
/**
 * @OA\Get(
 *     path="/api/kategori-ukt",
 *     summary="Tampilkan semua kategori UKT",
 *     tags={"Kategori UKT"},
 *     @OA\Response(
 *         response=200,
 *         description="Berhasil mengambil data",
 *         @OA\JsonContent(type="array", @OA\Items(
 *             @OA\Property(property="id_kategori_ukt", type="string"),
 *             @OA\Property(property="id_prodi", type="integer"),
 *             @OA\Property(property="kategori_ukt", type="string"),
 *             @OA\Property(property="nominal", type="integer"),
 *             @OA\Property(
 *                 property="prodi",
 *                 type="object",
 *                 @OA\Property(property="nama_prodi", type="string"),
 *                 @OA\Property(property="jenjang", type="string")
 *             )
 *         ))
 *     )
 * )
 */
    // Tampilkan semua kategori UKT
    public function index()
    {
        // Include relasi prodi
        $data = KategoriUKT::with('prodi')->get();
        return response()->json($data);
    }

/**
 * @OA\Post(
 *     path="/api/kategori-ukt",
 *     summary="Tambah kategori UKT baru",
 *     tags={"Kategori UKT"},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"id_kategori_ukt","id_prodi","kategori_ukt","nominal"},
 *             @OA\Property(property="id_kategori_ukt", type="string", example="TI1"),
 *             @OA\Property(property="id_prodi", type="integer"),
 *             @OA\Property(property="kategori_ukt", type="string"),
 *             @OA\Property(property="nominal", type="integer")
 *         )
 *     ),
 *     @OA\Response(
 *         response=201,
 *         description="Kategori UKT berhasil ditambahkan"
 *     )
 * )
 */
        // Simpan kategori UKT baru
    public function store(Request $request)
    {
        $data = $request->validate([
            'id_kategori_ukt' => 'required|string|max:10|unique:tabel_kategori_ukt,id_kategori_ukt',
            'id_prodi' => 'required|exists:kol_prodi,id_prodi',
            'kategori_ukt' => 'required|string|max:100',
            'nominal' => 'required|integer|min:0',
        ]);
        $kategori = KategoriUKT::create($data);
        return response()->json(['message' => 'Kategori UKT berhasil ditambahkan.', 'data' => $kategori], 201);
    }
/**
 * @OA\Get(
 *     path="/api/kategori-ukt/{id}",
 *     summary="Detail kategori UKT",
 *     tags={"Kategori UKT"},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         @OA\Schema(type="string")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Berhasil mengambil detail",
 *         @OA\JsonContent(
 *             @OA\Property(property="id_kategori_ukt", type="string"),
 *             @OA\Property(property="id_prodi", type="integer"),
 *             @OA\Property(property="nama_prodi", type="string"),
 *             @OA\Property(property="jenjang", type="string"),
 *             @OA\Property(property="kategori_ukt", type="string"),
 *             @OA\Property(property="nominal", type="integer")
 *         )
 *     )
 * )
 */
    // Detail kategori UKT
    public function show($id)
    {
        $kategori = KategoriUKT::with('prodi')->findOrFail($id);

        return response()->json([
            'id_kategori_ukt' => $kategori->id_kategori_ukt,
            'id_prodi' => $kategori->id_prodi,
            'nama_prodi' => $kategori->prodi->nama_prodi ?? null,
            'jenjang' => $kategori->prodi->jenjang ?? null,
            'kategori_ukt' => $kategori->kategori_ukt,
            'nominal' => $kategori->nominal,
        ]);
    }
/**
 * @OA\Put(
 *     path="/api/kategori-ukt/{id}",
 *     summary="Update kategori UKT",
 *     tags={"Kategori UKT"},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         @OA\Schema(type="string")
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             @OA\Property(property="id_prodi", type="integer"),
 *             @OA\Property(property="kategori_ukt", type="string"),
 *             @OA\Property(property="nominal", type="integer")
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Kategori UKT berhasil diupdate"
 *     )
 * )
 */
    // Update kategori UKT
    public function update(Request $request, $id)
    {
        $kategori = KategoriUKT::findOrFail($id);
        $data = $request->validate([
            'id_prodi' => 'required|exists:kol_prodi,id_prodi',
            'kategori_ukt' => 'sometimes|string|max:100',
            'nominal' => 'sometimes|integer|min:0',
        ]);
        $kategori->update($data);
        return response()->json(['message' => 'Kategori UKT berhasil diupdate.', 'data' => $kategori]);
    }
/**
 * @OA\Delete(
 *     path="/api/kategori-ukt/{id}",
 *     summary="Hapus kategori UKT",
 *     tags={"Kategori UKT"},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         @OA\Schema(type="string")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Kategori UKT berhasil dihapus"
 *     )
 * )
 */
    // Hapus kategori UKT
    public function destroy($id)
    {
        $kategori = KategoriUKT::findOrFail($id);
        $kategori->delete();
        return response()->json(['message' => 'Kategori UKT berhasil dihapus.']);
    }
}