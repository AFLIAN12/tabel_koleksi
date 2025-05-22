<?php

namespace App\Http\Controllers;

use App\Models\StatusKalender;
use Illuminate\Http\Request;

class StatusKalenderController extends Controller
{
    public function index() {
        return StatusKalender::all();
    }

    public function store(Request $request) {
        return StatusKalender::create($request->all());
    }

    public function show($id) {
        return StatusKalender::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = StatusKalender::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return StatusKalender::destroy($id);
    }
}
