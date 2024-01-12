<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function do_login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        // dd($credentials);
        if (Auth::attempt($credentials)) {
            if (auth()->user()->isAdmin()) {
                Session::flash('success', 'Đăng nhập thành công.');
                return redirect()->route('admin.home');
            } else {
                return redirect()->route('home');
            }
        } else {
            Session::flash('error', 'Sai tên đăng nhập hoặc mật khẩu.');
            return back();
        }
    }
    public function do_register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string'],
            'address' => ['required', 'string'],
            'phone' => ['required'],
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);
        Auth::login($user);
        return redirect()->route('home');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
