@extends('layouts.app')

@section('content')
<div class="container">
    <h2>🧾 Hóa đơn #{{ $order->id }}</h2>
    <p><strong>Mã đơn hàng:</strong> {{ $order->order_code }}</p>
    <p><strong>Khách hàng:</strong> {{ $order->user->name }}</p>
    <p><strong>Email:</strong> {{ $order->user->email }}</p>
    <p><strong>Địa chỉ giao hàng:</strong> {{ $ward ?? 'N/A'}}, {{ $district ?? 'N/A'}}, {{ $province ?? 'N/A'}}</p>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Hình ảnh</th>
                <th>Tên SP</th>
                <th>Giá</th>
                <th>SL</th>
                <th>Tổng</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->orderItems as $item)
                <tr>
                    <td><img src="{{ asset('image/products/' . $item->product->image) }}" width="60"></td>
                    <td>{{ $item->product->name }}</td>
                    <td>{{ number_format($item->price, 0, ',', '.') }}đ</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ number_format($item->price * $item->quantity, 0, ',', '.') }}đ</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h5 class="text-end">Tổng cộng: {{ number_format($order->total_price, 0, ',', '.') }}đ</h5>

    <div class="text-end mt-3">
        <a href="{{ route('user.orders') }}" class="btn btn-secondary">← Quay lại lịch sử</a>
    </div>
</div>
@endsection
