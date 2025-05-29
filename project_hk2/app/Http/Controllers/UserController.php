<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Province;
use App\Models\District;
use App\Models\Ward;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.users.index', compact('users'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        // Lấy địa chỉ giao hàng nếu có
        $province = Province::where('code', $user->province_code)->value('name');
        $district = District::where('code', $user->district_code)->value('name');
        $ward = Ward::where('code', $user->ward_code)->value('name');

        return view('admin.users.show', compact('user', 'province', 'district', 'ward'));
    }

    public function toggleStatus($id)
    {
        $user = User::findOrFail($id);
        $user->is_active = !$user->is_active;
        $user->save();

        return back()->with('success', 'Cập nhật trạng thái người dùng thành công.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return back()->with('success', 'Đã xoá người dùng thành công.');
    }
}
