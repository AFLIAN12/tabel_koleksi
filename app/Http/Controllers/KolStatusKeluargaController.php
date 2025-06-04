<?php

namespace App\Http\Controllers;

use App\Models\KolStatusKeluarga;
use Illuminate\Http\Request;

class KolStatusKeluargaController extends Controller
{
    public function index() {
        return KolStatusKeluarga::all();
    }

    public function store(Request $request) {
        return KolStatusKeluarga::create($request->all());
    }

    public function show($id) {
        return KolStatusKeluarga::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = KolStatusKeluarga::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return KolStatusKeluarga::destroy($id);
    }
}
