<?php

namespace App\Http\Controllers;

use App\Models\KolJenjangPoliteknik;
use Illuminate\Http\Request;

class KolJenjangPoliteknikController extends Controller
{
    public function index() {
        return KolJenjangPoliteknik::all();
    }

    public function store(Request $request) {
        return KolJenjangPoliteknik::create($request->all());
    }

    public function show($id) {
        return KolJenjangPoliteknik::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = KolJenjangPoliteknik::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return KolJenjangPoliteknik::destroy($id);
    }
}
