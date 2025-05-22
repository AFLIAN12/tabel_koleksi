<?php

namespace App\Http\Controllers;

use App\Models\StatusStruktural;
use Illuminate\Http\Request;

class StatusStrukturalController extends Controller
{
    public function index() {
        return StatusStruktural::all();
    }

    public function store(Request $request) {
        return StatusStruktural::create($request->all());
    }

    public function show($id) {
        return StatusStruktural::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = StatusStruktural::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return StatusStruktural::destroy($id);
    }
}
