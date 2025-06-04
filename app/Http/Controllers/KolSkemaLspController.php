<?php

namespace App\Http\Controllers;

use App\Models\KolSkemaLsp;
use Illuminate\Http\Request;

class KolSkemaLspController extends Controller
{
    public function index() {
        return KolSkemaLsp::all();
    }

    public function store(Request $request) {
        return KolSkemaLsp::create($request->all());
    }

    public function show($id) {
        return KolSkemaLsp::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = KolSkemaLsp::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return KolSkemaLsp::destroy($id);
    }
}
