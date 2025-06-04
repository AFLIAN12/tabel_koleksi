<?php

namespace App\Http\Controllers;

use App\Models\KolJenisAktifitas;
use Illuminate\Http\Request;

class KolJenisAktifitasController extends Controller
{
    public function index() {
        return KolJenisAktifitas::all();
    }

    public function store(Request $request) {
        return KolJenisAktifitas::create($request->all());
    }

    public function show($id) {
        return KolJenisAktifitas::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = KolJenisAktifitas::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return KolJenisAktifitas::destroy($id);
    }
}
