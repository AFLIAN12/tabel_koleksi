<?php

namespace App\Http\Controllers;

use App\Models\KolPoliteknik;
use Illuminate\Http\Request;

class KolPoliteknikController extends Controller
{
    public function index() {
        return KolPoliteknik::all();
    }

    public function store(Request $request) {
        return KolPoliteknik::create($request->all());
    }

    public function show($id) {
        return KolPoliteknik::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = KolPoliteknik::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return KolPoliteknik::destroy($id);
    }
}
