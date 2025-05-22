<?php

namespace App\Http\Controllers;

use App\Models\Terminal;
use Illuminate\Http\Request;

class TerminalController extends Controller
{
    public function index() {
        return Terminal::all();
    }

    public function store(Request $request) {
        return Terminal::create($request->all());
    }

    public function show($id) {
        return Terminal::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = Terminal::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return Terminal::destroy($id);
    }
}
