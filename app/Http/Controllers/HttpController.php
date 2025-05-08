<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class HttpController extends Controller
{
    public function index(){
        $http = Http::get('https://dummyjson.com/comments');
        return $http->json();
    }

    public function login(){
        $user = Http::post('https://dummyjson.com/auth/login',[
            'username'=> 'emilys',
            'password'=> 'emilyspass'
        ]);
        return response()->json([
            'status' => true,
            'message' => 'Login successful.',
            'data' => $user->json(),
        ], 200);
    }
}
