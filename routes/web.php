<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
//2 use multiple model
// Route::get('users3/{user:name}/brands/{brand}', function (User $user, Brand $brand){
//     return $user->name . $brand->name;
// });
// 3 controller in id
Route::get('users4/{user}',[UserController::class,'show4']);
// 4 controller in different column
Route::get('users5/{user:email}',[UserController::class,'show5']);
// Route::get('users6/{user}',[UserController::class,'show6']);


// MVC CRUD
Route::resource('brands', BrandController::class);
