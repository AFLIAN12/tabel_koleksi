<?php

namespace App\Http\Controllers;

use App\Models\KolPilihanProdi;
use Illuminate\Http\Request;

class KolPilihanProdiController extends Controller
{
    public function index() {
        return KolPilihanProdi::all();
    }

    public function store(Request $request) {
        return KolPilihanProdi::create($request->all());
    }

    public function show($id) {
        return KolPilihanProdi::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = KolPilihanProdi::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return KolPilihanProdi::destroy($id);
    }
}
