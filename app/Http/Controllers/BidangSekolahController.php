<?php

namespace App\Http\Controllers;

use App\Models\BidangSekolah;
use Illuminate\Http\Request;

class BidangSekolahController extends Controller
{
    public function index() {
        return BidangSekolah::all();
    }

    public function store(Request $request) {
        return BidangSekolah::create($request->all());
    }

    public function show($id) {
        return BidangSekolah::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = BidangSekolah::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return BidangSekolah::destroy($id);
    }
}
