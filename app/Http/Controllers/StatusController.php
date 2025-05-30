<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index() {
        return Status::all();
    }

    public function store(Request $request) {
        return Status::create($request->all());
    }

    public function show($id) {
        return Status::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = Status::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return Status::destroy($id);
    }
}
