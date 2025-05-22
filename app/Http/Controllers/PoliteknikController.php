<?php

namespace App\Http\Controllers;

use App\Models\Politeknik;
use Illuminate\Http\Request;

class PoliteknikController extends Controller
{
    public function index() {
        return Politeknik::all();
    }

    public function store(Request $request) {
        return Politeknik::create($request->all());
    }

    public function show($id) {
        return Politeknik::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = Politeknik::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return Politeknik::destroy($id);
    }
}
