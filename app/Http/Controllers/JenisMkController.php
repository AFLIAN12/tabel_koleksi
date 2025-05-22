<?php

namespace App\Http\Controllers;

use App\Models\JenisMk;
use Illuminate\Http\Request;

class JenisMkController extends Controller
{
    public function index() {
        return JenisMk::all();
    }

    public function store(Request $request) {
        return JenisMk::create($request->all());
    }

    public function show($id) {
        return JenisMk::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = JenisMk::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return JenisMk::destroy($id);
    }
}
