<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/'); // hoặc dashboard
        }

        return back()->withErrors(['email' => 'Email hoặc mật khẩu sai']);
    }

    

    public function logout() {     
        session()->flush(); // Xoá toàn bộ session (bao gồm cart, địa chỉ,...)
        Auth::logout(); // huỷ phiên đăng nhập
        return redirect()->route('login')->with('message', 'Bạn đã đăng xuất thành công.');
    }
}
