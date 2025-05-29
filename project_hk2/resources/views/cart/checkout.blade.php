@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">🔐 Xác nhận đơn hàng</h2>

    @php
        use App\Models\Province;
        use App\Models\District;
        use App\Models\Ward;

        $provinceName = Province::where('code', session('province_code'))->value('name');
        $districtName = District::where('code', session('district_code'))->value('name');
        $wardName = Ward::where('code', session('ward_code'))->value('name');

        $cart = session('cart', []);
        $total = collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']);
    @endphp

    <h5>📍 Địa chỉ giao hàng:</h5>
    <ul>
        <li><strong>Tỉnh:</strong> {{ $provinceName ?? 'Chưa chọn' }}</li>
        <li><strong>Quận:</strong> {{ $districtName ?? 'Chưa chọn' }}</li>
        <li><strong>Phường:</strong> {{ $wardName ?? 'Chưa chọn' }}</li>
    </ul>

    <h5 class="mt-4">🛍 Sản phẩm đã chọn:</h5>
    @if (count($cart) > 0)
        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th>Hình ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Tổng</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart as $item)
                <tr>
                    <td><img src="{{ asset('image/products/' . $item['image']) }}" width="60"></td>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ number_format($item['price'], 0, ',', '.') }}đ</td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>{{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}đ</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <h5 class="text-end">Tổng tiền: {{ number_format($total, 0, ',', '.') }}đ</h5>

        <form action="{{ route('cart.completeOrder') }}" method="POST" class="text-center mt-4">
            @csrf
            <button class="btn btn-primary px-4 py-2">💳 Hoàn tất đặt hàng</button>
        </form>
    @else
        <div class="alert alert-warning">Giỏ hàng trống. Vui lòng thêm sản phẩm.</div>
    @endif
</div>
@endsection
