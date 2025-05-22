<?php

namespace App\Http\Controllers;

use App\Models\AsalSekolah;
use Illuminate\Http\Request;

class AsalSekolahController extends Controller
{
    public function index() {
        return AsalSekolah::all();
    }

    public function store(Request $request) {
        return AsalSekolah::create($request->all());
    }

    public function show($id) {
        return AsalSekolah::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = AsalSekolah::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return AsalSekolah::destroy($id);
    }
}
