<?php

namespace App\Http\Controllers;

use App\Models\JenisSekolah;
use Illuminate\Http\Request;

class JenisSekolahController extends Controller
{
    public function index() {
        return JenisSekolah::all();
    }

    public function store(Request $request) {
        return JenisSekolah::create($request->all());
    }

    public function show($id) {
        return JenisSekolah::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = JenisSekolah::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return JenisSekolah::destroy($id);
    }
}
