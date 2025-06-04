<?php

namespace App\Http\Controllers;

use App\Models\KolPilihanProdiSbmpn;
use Illuminate\Http\Request;

class KolPilihanProdiSbmpnController extends Controller
{
    public function index() {
        return KolPilihanProdiSbmpn::all();
    }

    public function store(Request $request) {
        return KolPilihanProdiSbmpn::create($request->all());
    }

    public function show($id) {
        return KolPilihanProdiSbmpn::where('id_prodi', $id)->get();
    }

    public function update(Request $request, $id) {
        $data = KolPilihanProdiSbmpn::where('id_prodi', $id)->firstOrFail();
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return KolPilihanProdiSbmpn::where('id_prodi', $id)->delete();
    }
}
