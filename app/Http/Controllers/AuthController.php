<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Mail\LoginMail;
use Mail;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginSubmit(Request $request){
        $request->validate([
            'email' => 'required|max:70|email|exists:users',
            'password' => 'required|max:12|min:8|string'
        ]);
        try {
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                $data = [
                    'name' => Auth::user()->name,
                    'email' => Auth::user()->email,
                ];
                Mail::to("kamleshp52170@gmail.com")->send(new LoginMail($data));
                return Auth::user();
            }else{
                return back()->with("error","Invalid credentials");
            }
        } catch (\Exception $ex) {
            return back()->with('error',$ex->getMessage());
        }
    }

    public function dashboard(){
        return Auth::user();
    }

    public function logout(){
        Auth::logout();
        Session::flush();
        return to_route()->with("logout successfully!");
    }
}
