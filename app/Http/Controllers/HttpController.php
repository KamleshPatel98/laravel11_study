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
}
