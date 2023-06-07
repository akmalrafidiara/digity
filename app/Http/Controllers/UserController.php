<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();
        return view('dashboard/user/index', compact('users'));
    }
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

    public function editUser($id){
        $user = User::find($id);
        return view('dashboard/user/edit', compact('user'));
    }
    public function updateUser(Request $request){
        // dd($request->profile);
        $validate = $request->validate([
            'name' => 'required|max:55',
            'username' => 'required|max:55',
            'email' => 'email|required|unique:users',
            'password' => 'min:6',
            'role_id' => 'required',
        ]);



        $user = User::find($request->id);

        // update the profile image if changed
        if($request->hasFile('profile')){
                $file = public_path('/assets/img/').$user->profile;
                if(file_exists($file)){
                    unlink($file);
                    $file = $request->file('profile');
                    $extension = $file->getClientOriginalExtension();
                    $filename = 'profile.'.$request->username.time() . '.' . $extension;
                    $file->move('assets/img/', $filename);
                    $user->profile = $filename;
                }
            }
        

        $user->name = $request->name;
        $user->role_id = $request->role_id;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->profile = $request->profile;
        $user->address = $request->address;
        $user->date_of_birth = $request->date_of_birth;
        $user->phone_number = $request->phone_number;
        $user->save();

        return redirect('/dashboard/user')->with('status', 'Data user berhasil diubah!');
    }

    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();

        return redirect('/dashboard')->with('status', 'Data user berhasil dihapus!');
    }

    public function createUser(Request $request){
        // dd($request->all());
        $validate = $request->validate([
            'name' => 'required|max:55',
            'email' => 'email|required|unique:users',
            'password' => 'required|min:6',
            'role_id' => 'required',
        ]);

        
        $user = new User;
        // save the profile image
        if($request->hasFile('profile')){
            $file = $request->file('profile');
            $extension = $file->getClientOriginalExtension();
            $filename = 'profile.'.$request->username.time() . '.' . $extension;
            $file->move('/assets/img/', $filename);
            $user->profile = $filename;
            
        }
        $user->name = $request->name;
        $user->username = $request->username;
        $user->role_id = $request->role_id;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->password = bcrypt($request->password);
        $user->profile = $filename;
        $user->bio = $request->bio;
        $user->save();
        return redirect('/dashboard/user')->with('status', 'Data user berhasil ditambahkan!');
    }
}
