<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    public function index() {
        return Pendidikan::all();
    }

    public function store(Request $request) {
        return Pendidikan::create($request->all());
    }

    public function show($id) {
        return Pendidikan::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $pendidikan = Pendidikan::findOrFail($id);
        $pendidikan->update($request->all());
        return $pendidikan;
    }

    public function destroy($id) {
        return Pendidikan::destroy($id);
    }
}
