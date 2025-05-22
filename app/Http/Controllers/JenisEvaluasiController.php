<?php

namespace App\Http\Controllers;

use App\Models\JenisEvaluasi;
use Illuminate\Http\Request;

class JenisEvaluasiController extends Controller
{
    public function index() {
        return JenisEvaluasi::all();
    }

    public function store(Request $request) {
        return JenisEvaluasi::create($request->all());
    }

    public function show($id) {
        return JenisEvaluasi::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = JenisEvaluasi::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return JenisEvaluasi::destroy($id);
    }
}
