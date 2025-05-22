<?php

namespace App\Http\Controllers;

use App\Models\SkemaLsp;
use Illuminate\Http\Request;

class SkemaLspController extends Controller
{
    public function index() {
        return SkemaLsp::all();
    }

    public function store(Request $request) {
        return SkemaLsp::create($request->all());
    }

    public function show($id) {
        return SkemaLsp::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = SkemaLsp::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return SkemaLsp::destroy($id);
    }
}
