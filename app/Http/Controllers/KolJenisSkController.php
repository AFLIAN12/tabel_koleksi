<?php

namespace App\Http\Controllers;

use App\Models\KolJenisSk;
use Illuminate\Http\Request;

class KolJenisSkController extends Controller
{
    public function index() {
        return KolJenisSk::all();
    }

    public function store(Request $request) {
        return KolJenisSk::create($request->all());
    }

    public function show($id) {
        return KolJenisSk::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = KolJenisSk::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return KolJenisSk::destroy($id);
    }
}
