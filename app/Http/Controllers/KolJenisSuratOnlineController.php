<?php

namespace App\Http\Controllers;

use App\Models\KolJenisSuratOnline;
use Illuminate\Http\Request;

class KolJenisSuratOnlineController extends Controller
{
    public function index() {
        return KolJenisSuratOnline::all();
    }

    public function store(Request $request) {
        return KolJenisSuratOnline::create($request->all());
    }

    public function show($id) {
        return KolJenisSuratOnline::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = KolJenisSuratOnline::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return KolJenisSuratOnline::destroy($id);
    }
}
