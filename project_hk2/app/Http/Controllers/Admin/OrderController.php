<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use App\Http\Middleware\IsAdmin;
use App\Models\Province;
use App\Models\District;
use App\Models\Ward;

class OrderController extends Controller
{
    // hàm hiển thị tất cả đơn hàng của người dùng
    public function index(User $user)
    {
        $orders = $user->orders; // Gọi quan hệ trong model User
        return view('admin.orders.vieworders', compact('user', 'orders'));
    }
    public function show(Order $order)
    {
        $order->load('user', 'items.product');

        // Lấy thông tin địa chỉ giao hàng
        $province = Province::where('code', $order->province_code)->value('name');
        $district = District::where('code', $order->district_code)->value('name');
        $ward = Ward::where('code', $order->ward_code)->value('name');
        return view('admin.orders.showOrders', compact('order', 'province', 'district', 'ward'));
    }

    public function updateStatus(Request $request, Order $order)
    {
        $order->delivery_status = $request->delivery_status;
        $order->save();

        return back()->with('success', 'Đã cập nhật trạng thái giao hàng!');
    }
}
