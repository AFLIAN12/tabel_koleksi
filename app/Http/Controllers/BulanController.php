<?php

namespace App\Http\Controllers;

use App\Models\Bulan;
use Illuminate\Http\Request;

class BulanController extends Controller
{
    public function index() {
        return Bulan::all();
    }

    public function store(Request $request) {
        return Bulan::create($request->all());
    }

    public function show($id) {
        return Bulan::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = Bulan::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return Bulan::destroy($id);
    }
}
