<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller 
{
    public function showlogin(){
        return view('pages.login');
    }
    
    public function login (Request $request){
        $request->validate([
            'username' => 'required|string|max:20',
            'password' => 'required|max:50|min:6',
        ]);
        if (Auth::attempt($request->only('username','password'), $request->remember)){
            return redirect('/dashboard')->with('success','Login berhasil, Selamat datang');
        }
        return back()->with('failed','Username atau Password salah');
    }

    public function logout (){
        Auth::logout(Auth::user());
        return redirect('/login')->with('logout', 'Anda telah logout');
    }
}
