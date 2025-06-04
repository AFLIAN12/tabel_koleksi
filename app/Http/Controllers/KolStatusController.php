<?php

namespace App\Http\Controllers;

use App\Models\KolStatus;
use Illuminate\Http\Request;

class KolStatusController extends Controller
{
    public function index() {
        return KolStatus::all();
    }

    public function store(Request $request) {
        return KolStatus::create($request->all());
    }

    public function show($id) {
        return KolStatus::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = KolStatus::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return KolStatus::destroy($id);
    }
}
