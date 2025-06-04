<?php

namespace App\Http\Controllers;

use App\Models\KolStatusKalender;
use Illuminate\Http\Request;

class KolStatusKalenderController extends Controller
{
    public function index() {
        return KolStatusKalender::all();
    }

    public function store(Request $request) {
        return KolStatusKalender ::create($request->all());
    }

    public function show($id) {
        return KolStatusKalender::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = KolStatusKalender::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return KolStatusKalender::destroy($id);
    }
}
