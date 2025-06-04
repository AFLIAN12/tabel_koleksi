<?php

namespace App\Http\Controllers;

use App\Models\KolBebasYudisium;
use Illuminate\Http\Request;

class KolBebasYudisiumController extends Controller
{
    public function index() {
        return KolBebasYudisium::all();
    }

    public function store(Request $request) {
        return KolBebasYudisium::create($request->all());
    }

    public function show($id) {
        return KolBebasYudisium::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = KolBebasYudisium::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return KolBebasYudisium::destroy($id);
    }
}
