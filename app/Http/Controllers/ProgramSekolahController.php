<?php

namespace App\Http\Controllers;

use App\Models\ProgramSekolah;
use Illuminate\Http\Request;

class ProgramSekolahController extends Controller
{
    public function index() {
        return ProgramSekolah::all();
    }

    public function store(Request $request) {
        return ProgramSekolah::create($request->all());
    }

    public function show($id) {
        return ProgramSekolah::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = ProgramSekolah::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return ProgramSekolah::destroy($id);
    }
}
