<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{


    public function index(){
        return view('dashboard.index');
    }
    public function login(){
        return view('dashboard.auth.login');
    }
    public function userLogin( Request $request){
        if (Auth::attempt(['email' => $request->email, 'password' =>$request->password])) {
            return redirect()->route('dashboard');
        }
        return redirect('/admin')->withErrors(" Email veya Şifre Hatalı");
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
