<?php

namespace App\Http\Controllers;

use App\Models\BebasYudisium;
use Illuminate\Http\Request;

class BebasYudisiumController extends Controller
{
    public function index() {
        return BebasYudisium::all();
    }

    public function store(Request $request) {
        return BebasYudisium::create($request->all());
    }

    public function show($id) {
        return BebasYudisium::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = BebasYudisium::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return BebasYudisium::destroy($id);
    }
}
