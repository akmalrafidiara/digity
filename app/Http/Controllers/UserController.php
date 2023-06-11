<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();
        return view('dashboard/user/index', compact('users'));
    }

    public function create()
    {
        return view('dashboard/user/create');
    }
    public function register(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|max:55',
                'email' => 'email|required|unique:users',
                'password' => 'required|min:6'
            ],
            [
                'name.required' => 'Name harus diisi!',
                'email.required' => 'Email harus diisi!',
                'password.required' => 'Password harus diisi!'
            ]
        );


        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);

        $loginData = $request->only('email', 'password');

        if (Auth::attempt($loginData)) {
            return redirect('/dashboard');
        } else {
            return redirect('/')->with('status', 'Register gagal!');
        };
    }

    public function login(Request $request)
    {
        $login = $request->validate(
            [
                'email' => 'email|required',
                'password' => 'required'
            ],
            [
                'email.required' => 'Email harus diisi!',
                'password.required' => 'Password harus diisi!'
            ]
        );
        if (Auth::attempt($login)) {
            return redirect('/dashboard');
        } else {
            return redirect('/')->with('status', 'Login gagal!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('status', 'Logout berhasil!');
    }

    public function editUser($id)
    {
        $user = User::find($id);
        return view('dashboard/user/edit', compact('user'));
    }
    public function updateUser(Request $request)
    {
        // dd($request->all());
        // dd($request->profile);
        // $validate = $request->validate([
        //     'name' => 'required|max:55',
        //     'email' => 'email|required|unique:users',
        //     'role_id' => 'required',
        // ]);



        $user = User::find($request->id);
        // dd($user);
        // update the profile image if changed
        if ($user->profile != null) {
            $file = '/assets/profile/' . $user->profile;
            if (file_exists($file)) {
                unlink($file);
            }
        }
        if ($request->hasFile('profile')) {
            $file = $request->file('profile');
            $extension = $file->getClientOriginalExtension();
            $filename = 'profile.' . $request->username . time() . '.' . $extension;
            $file->move('assets/profile/', $filename);
            $user->profile = $filename;
        }


        $user->name = $request->name;
        if ($request->role_id != null) {
            $user->role_id = $request->role_id;
        } else {
            $find = User::find($request->id);
            $user->role_id = $find->role_id;
        }
        $user->email = $request->email;
        if ($request->password != null) {
            $user->password = bcrypt($request->password);
        }
        $user->profile = $filename;
        $user->address = $request->address;
        $user->bio = $request->bio;
        $user->phone_number = $request->phone_number;
        $user->save();

        return redirect('/dashboard/user')->with('status', 'Data user berhasil diubah!');
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/dashboard')->with('status', 'Data user berhasil dihapus!');
    }

    public function createUser(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate([
            'name' => 'required|max:55',
            'email' => 'email|required|unique:users',
            'password' => 'required|min:6',
            'role_id' => 'required',
        ]);


        $user = new User;
        // save the profile image
        $filename = null;
        if ($request->hasFile('profile')) {
            $file = $request->file('profile');
            $extension = $file->getClientOriginalExtension();
            $filename = 'profile.' . $request->username . time() . '.' . $extension;
            $file->move('assets/profile/', $filename);
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

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            // dd($user);
            $isUser = User::where('google_id', $user->id)->first();
            // dd($isUser);
            if ($isUser) {
                Auth::login($isUser);
                return redirect('/dashboard');
            } else {
                $createUser = User::create([
                    'name' => $user->name,
                    'username' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => bcrypt(Str::random(24))
                ]);
                Auth::login($createUser);
                return redirect('/dashboard');
            }
        } catch (\Throwable $th) {
            return redirect('/')->with('status', 'Login gagal!');
        }
    }
}
