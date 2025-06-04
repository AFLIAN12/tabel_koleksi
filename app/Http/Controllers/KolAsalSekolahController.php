<?php

namespace App\Http\Controllers;

use App\Models\KolAsalSekolah;
use Illuminate\Http\Request;

class KolAsalSekolahController extends Controller
{
    public function index() {
        return KolAsalSekolah::all();
    }

    public function store(Request $request) {
        return KolAsalSekolah::create($request->all());
    }

    public function show($id) {
        return KolAsalSekolah::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = KolAsalSekolah::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return KolAsalSekolah::destroy($id);
    }
}
