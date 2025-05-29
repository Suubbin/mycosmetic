@extends('layouts.app')

@section('content')
<div class="container">
    <h2>🧾 Hóa đơn #{{ $order->id }}</h2>
    <p><strong>Mã đơn hàng:</strong> {{ $order->order_code }}</p>
    <p>Khách hàng: {{ $order->user->name }}</p>
    <p>Email: {{ $order->user->email }}</p>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Hình ảnh</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>SL</th>
                <th>Tổng</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->orderItems as $item)
            <tr>
                <td>
                    <img src="{{ asset('image/products/' . $item->product->image) }}" width="60" alt="Ảnh sản phẩm">
                </td>
                <td>{{ $item->product->name }}</td>
                <td>{{ number_format($item->price, 0, ',', '.') }}đ</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ number_format($item->price * $item->quantity, 0, ',', '.') }}đ</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h5 class="text-end">Tổng cộng: {{ number_format($order->total_price, 0, ',', '.') }}đ</h5>
</div>
@endsection
