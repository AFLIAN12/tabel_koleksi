<?php

namespace App\Http\Controllers;

use App\Models\PilihanProdi;
use Illuminate\Http\Request;

class PilihanProdiController extends Controller
{
    public function index() {
        return PilihanProdi::all();
    }

    public function store(Request $request) {
        return PilihanProdi::create($request->all());
    }

    public function show($id) {
        return PilihanProdi::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = PilihanProdi::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return PilihanProdi::destroy($id);
    }
}
