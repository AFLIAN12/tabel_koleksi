<?php

namespace App\Http\Controllers;

use App\Models\KolTerminal;
use Illuminate\Http\Request;

class KolTerminalController extends Controller
{
    public function index() {
        return KolTerminal::all();
    }

    public function store(Request $request) {
        return KolTerminal::create($request->all());
    }

    public function show($id) {
        return KolTerminal::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = KolTerminal::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return KolTerminal::destroy($id);
    }
}
