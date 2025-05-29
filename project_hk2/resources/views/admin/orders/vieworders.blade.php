@extends('layouts.admin')

@section('title', 'Đơn hàng của người dùng')

@section('content')
<div class="container">
     <h3>📦 Danh sách tất cả đơn hàng của:</h3><strong>{{ $user->name }}</strong>

    @if ($orders->count() > 0)
        <table class="table table-bordered mt-3">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Mã hóa đơn</th>
                    <th>Ngày đặt</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái giao hàng</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                @php
                    $total = 0;
                    foreach ($order->items as $item) {
                        $total += $item->price * $item->quantity;
                    }
                @endphp
                    <tr>
                        <td>#{{ $order->id }}</td>
                        <td>{{ $order->order_code ?? 'N/A' }}</td>
                        <td>{{ $order->created_at->format('d/m/Y H:i') }}</td>
                        <td>{{ number_format($total, 0, ',', '.') }}đ</td>
                        <td>
                            <span class="badge 
                                @if($order->delivery_status === 'Đã đặt hàng') bg-warning
                                @elseif($order->delivery_status === 'Đang giao hàng') bg-primary
                                @elseif($order->delivery_status === 'Đã giao xong') bg-success
                                @endif">
                                {{ $order->delivery_status }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-sm btn-info">🔍 Xem chi tiết đơn hàng</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-info mt-4">Người dùng này chưa có đơn hàng nào.</div>
    @endif
</div>
@endsection
