<?php

namespace App\Http\Controllers;

use App\Models\JenjangPoliteknik;
use Illuminate\Http\Request;

class JenjangPoliteknikController extends Controller
{
    public function index() {
        return JenjangPoliteknik::all();
    }

    public function store(Request $request) {
        return JenjangPoliteknik::create($request->all());
    }

    public function show($id) {
        return JenjangPoliteknik::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = JenjangPoliteknik::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return JenjangPoliteknik::destroy($id);
    }
}
