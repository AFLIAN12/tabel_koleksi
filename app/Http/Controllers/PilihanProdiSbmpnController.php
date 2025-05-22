<?php

namespace App\Http\Controllers;

use App\Models\PilihanProdiSbmpn;
use Illuminate\Http\Request;

class PilihanProdiSbmpnController extends Controller
{
    public function index() {
        return PilihanProdiSbmpn::all();
    }

    public function store(Request $request) {
        return PilihanProdiSbmpn::create($request->all());
    }

    public function show($id) {
        return PilihanProdiSbmpn::where('id_prodi', $id)->get();
    }

    public function update(Request $request, $id) {
        $data = PilihanProdiSbmpn::where('id_prodi', $id)->firstOrFail();
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return PilihanProdiSbmpn::where('id_prodi', $id)->delete();
    }
}
