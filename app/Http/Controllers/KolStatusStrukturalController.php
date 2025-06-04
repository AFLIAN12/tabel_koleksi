<?php

namespace App\Http\Controllers;

use App\Models\KolStatusStruktural;
use Illuminate\Http\Request;

class KolStatusStrukturalController extends Controller
{
    public function index() {
        return KolStatusStruktural::all();
    }

    public function store(Request $request) {
        return KolStatusStruktural::create($request->all());
    }

    public function show($id) {
        return KolStatusStruktural::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = KolStatusStruktural::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return KolStatusStruktural::destroy($id);
    }
}
