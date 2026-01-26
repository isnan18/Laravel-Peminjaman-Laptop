<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller 
{
    public function login (Request $request){
        $request->validate([
            'username' => 'required|string|max:20',
            'password' => 'required|max:50',
        ]);
        if (Auth::attempt($request->only('username','password'), $request->remember)){
            return redirect('/dashboard');
        }
        return back()->with('failed','username atau password salah');
    }

    public function logout (){
        Auth::logout(Auth::user());
        return redirect('/login');
    }
}
