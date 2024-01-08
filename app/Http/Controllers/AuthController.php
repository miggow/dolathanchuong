<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    }
    public function do_register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'address' => 'required',
        ]);
        $user = User::create(request(['name', 'email', 'password', 'phone', 'address']));
        auth()->login($user);

        return redirect()->to('/');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
