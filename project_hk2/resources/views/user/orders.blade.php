@extends('layouts.app')

@section('content')
<div class="container">
    <h2>🧾 Lịch sử đơn hàng</h2>

    @if ($orders->isEmpty())
        <p>Bạn chưa có đơn hàng nào.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Mã đơn hàng</th>
                    <th>Ngày tạo</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td># {{ $order->id}}</td>
                    <td>
                        <a href="{{ route('user.orders.view', $order->id) }}">
                            {{ $order->order_code }}
                        </a>
                    </td>
                    <td>{{ $order->created_at->format('d/m/Y') }}</td>
                    <td>{{ number_format($order->total_price, 0, ',', '.') }}đ</td>
                    <td>
                        <span class="badge 
                            @if($order->delivery_status === 'Đã đặt hàng') bg-warning
                            @elseif($order->delivery_status === 'Đang giao hàng') bg-primary
                            @elseif($order->delivery_status === 'Đã giao xong') bg-success
                            @endif">
                            {{ $order->delivery_status }}
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
