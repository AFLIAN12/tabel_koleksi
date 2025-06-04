<?php

namespace App\Http\Controllers;

use App\Models\KolPendidikan;
use Illuminate\Http\Request;

class KolPendidikanController extends Controller
{
    public function index() {
        return KolPendidikan::all();
    }

    public function store(Request $request) {
        return KolPendidikan::create($request->all());
    }

    public function show($id) {
        return KolPendidikan::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $pendidikan = KolPendidikan::findOrFail($id);
        $pendidikan->update($request->all());
        return $pendidikan;
    }

    public function destroy($id) {
        return KolPendidikan::destroy($id);
    }
}
