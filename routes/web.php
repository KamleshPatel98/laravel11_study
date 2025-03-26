<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use \App\Models\Brand;
use \App\Models\User;
use App\Http\Controllers\BrandController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('component','component');

//Implict Route Model Binding
//1 simple 
Route::get('users1/{user}', function (User $user){
    return $user;
});
//2 user defined column
Route::get('users2/{user:name}', function (User $user){
    return $user;
});
//3 use multiple model
Route::get('users3/{user}/{brand}', function (User $user, Brand $brand){
    return $user->name . $brand->name;
});
// 4 controller in id
Route::get('users4/{user}',[UserController::class,'show4']);
// 5 controller in different column
Route::get('users5/{user:email}',[UserController::class,'show5']);
// 6 controller in multiple model
Route::get('users6/{user}/{brand}',[UserController::class,'show6']);


// MVC CRUD
Route::resource('brands', BrandController::class);
