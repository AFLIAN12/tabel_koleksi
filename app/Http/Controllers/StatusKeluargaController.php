<?php

namespace App\Http\Controllers;

use App\Models\StatusKeluarga;
use Illuminate\Http\Request;

class StatusKeluargaController extends Controller
{
    public function index() {
        return StatusKeluarga::all();
    }

    public function store(Request $request) {
        return StatusKeluarga::create($request->all());
    }

    public function show($id) {
        return StatusKeluarga::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = StatusKeluarga::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return StatusKeluarga::destroy($id);
    }
}
