<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/docs/api', function () {
    return view('swagger.index'); // atau sesuai view milikmu
});
