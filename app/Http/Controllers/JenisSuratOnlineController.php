<?php

namespace App\Http\Controllers;

use App\Models\JenisSuratOnline;
use Illuminate\Http\Request;

class JenisSuratOnlineController extends Controller
{
    public function index() {
        return JenisSuratOnline::all();
    }

    public function store(Request $request) {
        return JenisSuratOnline::create($request->all());
    }

    public function show($id) {
        return JenisSuratOnline::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = JenisSuratOnline::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return JenisSuratOnline::destroy($id);
    }
}
