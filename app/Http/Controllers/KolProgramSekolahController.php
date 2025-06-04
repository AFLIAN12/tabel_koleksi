<?php

namespace App\Http\Controllers;

use App\Models\KolProgramSekolah;
use Illuminate\Http\Request;

class KolProgramSekolahController extends Controller
{
    public function index() {
        return KolProgramSekolah::all();
    }

    public function store(Request $request) {
        return KolProgramSekolah::create($request->all());
    }

    public function show($id) {
        return KolProgramSekolah::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = KolProgramSekolah::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return KolProgramSekolah::destroy($id);
    }
}
