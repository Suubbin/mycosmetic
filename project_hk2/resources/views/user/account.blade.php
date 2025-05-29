@extends('layouts.app')

@section('content')
<div class="container">
    <h2>👤 Thông tin tài khoản</h2>

    <div class="card mt-3">
        <div class="card-body">
            <p><strong>👤 Họ tên:</strong> {{ $user->name }}</p>
            <p><strong>📧 Email:</strong> {{ $user->email }}</p>
            <p><strong>📦 Địa chỉ giao hàng:</strong><br>
                {{ $province ?? 'Chưa chọn tỉnh' }} -
                {{ $district ?? 'Chưa chọn quận' }} -
                {{ $ward ?? 'Chưa chọn phường' }}
            </p>
        </div>
    </div>

    <div class="text-center mt-3">
    <a href="{{ route('user.orders') }}" class="btn btn-outline-primary">📋 Xem đơn hàng đã đặt</a>
    <a href="{{ route('products.index') }}" class="btn btn-outline-success">🛒 Tiếp tục mua hàng</a>
</div>

</div>

@endsection
