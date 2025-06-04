<?php

namespace App\Http\Controllers;

use App\Models\KolBulan;
use Illuminate\Http\Request;

class KolBulanController extends Controller
{
    public function index() {
        return KolBulan::all();
    }

    public function store(Request $request) {
        return KolBulan::create($request->all());
    }

    public function show($id) {
        return KolBulan::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = KolBulan::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return KolBulan::destroy($id);
    }
}
