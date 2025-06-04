<?php

namespace App\Http\Controllers;

use App\Models\KolJenisMk;
use Illuminate\Http\Request;

class KolJenisMkController extends Controller
{
    public function index() {
        return KolJenisMk::all();
    }

    public function store(Request $request) {
        return KolJenisMk::create($request->all());
    }

    public function show($id) {
        return KolJenisMk::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = KolJenisMk::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return KolJenisMk::destroy($id);
    }
}
