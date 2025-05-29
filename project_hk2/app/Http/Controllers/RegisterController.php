<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterController extends Controller
{
    public function showRegistrationForm() {
        return view('auth.register');
    }

    public function register(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        ]);

        Auth::login($user); // login luôn sau đăng ký
        return redirect('/')->with('success', 'Đăng ký và đăng nhập thành công!');
    }
}