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

    public function updateUser(Request $request){
        $validate = $request->validate([
            'name' => 'required|max:55',
            'email' => 'email|required|unique:users',
            'password' => 'required|min:6',
            'role_id' => 'required',
        ]);

        $user = User::find($request->id);
        $user->name = $request->name;
        $user->role_id = $request->role_id;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->profile = $request->profile;
        $user->address = $request->address;
        $user->date_of_birth = $request->date_of_birth;
        $user->phone_number = $request->phone_number;
        $user->save();

        return redirect('/dashboard')->with('status', 'Data user berhasil diubah!');
    }

    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();

        return redirect('/dashboard')->with('status', 'Data user berhasil dihapus!');
    }

    public function createUser(Request $request){
        $validate = $request->validate([
            'name' => 'required|max:55',
            'email' => 'email|required|unique:users',
            'password' => 'required|min:6',
            'role_id' => 'required',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->role_id = $request->role_id;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->profile = $request->profile;
        $user->address = $request->address;
        $user->date_of_birth = $request->date_of_birth;
        $user->phone_number = $request->phone_number;
        $user->save();

        return redirect('/dashboard')->with('status', 'Data user berhasil ditambahkan!');
    }
}
