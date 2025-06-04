<?php

namespace App\Http\Controllers;

use App\Models\KolBidangSekolah;
use Illuminate\Http\Request;

class KolBidangSekolahController extends Controller
{
    public function index() {
        return KolBidangSekolah::all();
    }

    public function store(Request $request) {
        return KolBidangSekolah::create($request->all());
    }

    public function show($id) {
        return KolBidangSekolah::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = KolBidangSekolah::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return KolBidangSekolah::destroy($id);
    }
}
