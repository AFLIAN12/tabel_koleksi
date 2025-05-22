<?php

namespace App\Http\Controllers;

use App\Models\JalurPmb;
use Illuminate\Http\Request;

class JalurPmbController extends Controller
{
    public function index() {
        return JalurPmb::all();
    }

    public function store(Request $request) {
        return JalurPmb::create($request->all());
    }

    public function show($id) {
        return JalurPmb::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = JalurPmb::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return JalurPmb::destroy($id);
    }
}
