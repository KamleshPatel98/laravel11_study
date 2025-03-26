<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Brand;

class UserController extends Controller
{
    public function show4(User $user){
        return $user;
    }

    public function show5(User $user){
        return $user;
    }

    public function show6(User $user, Brand $brand){
        return $user . $brand;
    }

    // explicit route model binding
    public function explicit($user){
        return $user;
    }
}
