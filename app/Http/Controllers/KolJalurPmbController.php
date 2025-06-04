<?php

namespace App\Http\Controllers;

use App\Models\KolJalurPmb;
use Illuminate\Http\Request;

class KolJalurPmbController extends Controller
{
    public function index() {
        return KolJalurPmb::all();
    }

    public function store(Request $request) {
        return KolJalurPmb::create($request->all());
    }

    public function show($id) {
        return KolJalurPmb::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = KolJalurPmb::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return KolJalurPmb::destroy($id);
    }
}
