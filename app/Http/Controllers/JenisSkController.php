<?php

namespace App\Http\Controllers;

use App\Models\JenisSk;
use Illuminate\Http\Request;

class JenisSkController extends Controller
{
    public function index() {
        return JenisSk::all();
    }

    public function store(Request $request) {
        return JenisSk::create($request->all());
    }

    public function show($id) {
        return JenisSk::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = JenisSk::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return JenisSk::destroy($id);
    }
}
