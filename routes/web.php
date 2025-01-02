<?php

use App\Http\Controllers\adminCrud;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::resource('admin', adminCrud::class);

