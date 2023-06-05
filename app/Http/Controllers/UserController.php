<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:55',
            'email' => 'email|required|unique:users',
            'password' => 'required|min:6'
        ]
        , [
            'name.required' => 'Name harus diisi!',
            'email.required' => 'Email harus diisi!',
            'password.required' => 'Password harus diisi!'
        ]);  

        
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        
        $loginData = $request->only('email', 'password');
        
        if(Auth::attempt($loginData)) {
            return redirect('/dashboard');
        }else{
            return redirect('/')->with('status', 'Register gagal!');
        }

    ;
    }

    public function login(Request $request)
    {
        $login = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]
        , [
            'email.required' => 'Email harus diisi!',
            'password.required' => 'Password harus diisi!'
        ]);  
        if(Auth::attempt($login)) {
            return redirect('/dashboard');
        }else{
            return redirect('/')->with('status', 'Login gagal!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('status', 'Logout berhasil!');
    }

}
