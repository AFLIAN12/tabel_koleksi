<?php

namespace App\Http\Controllers;

use App\Models\KolJenisEvaluasi;
use Illuminate\Http\Request;

class KolJenisEvaluasiController extends Controller
{
    public function index() {
        return KolJenisEvaluasi::all();
    }

    public function store(Request $request) {
        return KolJenisEvaluasi::create($request->all());
    }

    public function show($id) {
        return KolJenisEvaluasi::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = KolJenisEvaluasi::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return KolJenisEvaluasi::destroy($id);
    }
}
