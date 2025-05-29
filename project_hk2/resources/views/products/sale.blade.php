@extends('layouts.app')

@section('content')
<div class="all-products">
    <h2>🧴 Tất Cả Sản Phẩm Sale</h2>
    <div class="product-grid">
        @for ($i = 38; $i <= 61; $i++)
            @php
                $brands = ['L\'Oreal', 'Innisfree', 'The Face Shop', 'Laneige', 'SK-II', 'Estee Lauder', 'Kiehl\'s', 'Some By Mi'];
                $brand = $brands[$i % count($brands)];
                $price = number_format(100000 + rand(0, 61) * 10000) . 'đ';
                $code = 'SP' . str_pad($i, 3, '0', STR_PAD_LEFT);
            @endphp
            <div class="product-item">
                <img src="{{ asset('image/sp' . ($i+1) . '.png') }}" alt="Sản phẩm {{ $i }}">
                <p><strong>Mã SP:</strong> {{ $code }}</p>
                <p><strong>Thương hiệu:</strong> {{ $brand }}</p>
                <p><strong>Giá:</strong> {{ $price }}</p>
                <form action="{{ route('cart.add', ['id' => $i]) }}" method="POST">
                    @csrf
                    <button type="submit" class="add-to-cart">🛒 Thêm vào giỏ</button>
                </form>
            </div>
        @endfor
    </div>
</div>
@endsection
