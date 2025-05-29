<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Middleware\IsAdmin; // Đảm bảo đã import middleware IsAdmin
use Illuminate\Support\Facades\Auth;
use App\Models\User;




class AdminController extends Controller
{
    public function index()
    {
        return view('layouts.admin.dashboard');
    }

    public function settings()
    {
        $products = Product::all();
        return view('admin.settings');  // tạo view này nếu chưa có
    }
    public function updateSettings(Request $request)
{
    $validated = $request->validate([
        'store_name' => 'required|string|max:255',
        'contact_email' => 'nullable|email',
        'contact_phone' => 'nullable|string|max:20',
        'address' => 'nullable|string',
    ]);

    foreach ($validated as $key => $value) {
        setting([$key => $value]); // lưu cài đặt
    }

    return redirect()->back()->with('success', 'Cài đặt đã được cập nhật thành công!');
}

}
