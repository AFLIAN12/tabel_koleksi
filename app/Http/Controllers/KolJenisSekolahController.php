<?php

namespace App\Http\Controllers;

use App\Models\KolJenisSekolah;
use Illuminate\Http\Request;

class KolJenisSekolahController extends Controller
{
    public function index() {
        return KolJenisSekolah::all();
    }

    public function store(Request $request) {
        return KolJenisSekolah::create($request->all());
    }

    public function show($id) {
        return KolJenisSekolah::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = KolJenisSekolah::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return KolJenisSekolah::destroy($id);
    }
}
