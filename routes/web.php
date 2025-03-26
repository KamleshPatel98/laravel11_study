<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('component','component');

// MVC CRUD
Route::resource('brands', BrandController::class);