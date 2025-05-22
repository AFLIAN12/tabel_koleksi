<?php

namespace App\Http\Controllers;

use App\Models\ProdiPoliteknik;
use Illuminate\Http\Request;

class ProdiPoliteknikController extends Controller
{
    public function index() {
        return ProdiPoliteknik::all();
    }

    public function store(Request $request) {
        return ProdiPoliteknik::create($request->all());
    }

    public function show($id) {
        return ProdiPoliteknik::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = ProdiPoliteknik::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return ProdiPoliteknik::destroy($id);
    }
}
