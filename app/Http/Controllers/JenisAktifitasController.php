<?php

namespace App\Http\Controllers;

use App\Models\JenisAktifitas;
use Illuminate\Http\Request;

class JenisAktifitasController extends Controller
{
    public function index() {
        return JenisAktifitas::all();
    }

    public function store(Request $request) {
        return JenisAktifitas::create($request->all());
    }

    public function show($id) {
        return JenisAktifitas::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = JenisAktifitas::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return JenisAktifitas::destroy($id);
    }
}
