<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    $request->session()->flash('failed', true);
    return view('welcome');
});
