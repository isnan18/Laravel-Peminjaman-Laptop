<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller 
{
    public function index(){
        return view('pages.dashboard');
    }

    public function edit(){
        $user = Auth::user();
        return view('pages.edit-profile', compact('user'));
    }

    public function update(Request $request){
        $user = Auth::user();
        $request-> validate([
            'email' => 'required|email',
            'username' => 'reuired',
            'password' => 'nullable|min:6',
         ]);

         $user->email = $request->email;
         $user->username = $request->username;
         if ($request->password){
            $user->password = Hash::make($request->password);
         }
         $user->save();
    }
}
