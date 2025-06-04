<?php

namespace App\Http\Controllers;

use App\Models\KolProdiPoliteknik;
use Illuminate\Http\Request;

class KolProdiPoliteknikController extends Controller
{
    public function index() {
        return KolProdiPoliteknik::all();
    }

    public function store(Request $request) {
        return KolProdiPoliteknik::create($request->all());
    }

    public function show($id) {
        return KolProdiPoliteknik::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $data = KolProdiPoliteknik::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id) {
        return KolProdiPoliteknik::destroy($id);
    }
}
