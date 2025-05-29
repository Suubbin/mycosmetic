@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 800px; margin: auto;">
    <h2>Chi Tiết Sản Phẩm</h2>

    <div class="product-detail" style="display: flex; gap: 20px; margin-top: 30px;">
        <div class="product-image" style="flex: 1;">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="width: 100%;">
        </div>
        <div class="product-info" style="flex: 1;">
            <h3>{{ $product->name }}</h3>
            <p><strong>Giá:</strong> {{ number_format($product->price, 0, ',', '.') }}₫</p>
            <p><strong>Mô tả:</strong></p>
            <p>{{ $product->description }}</p>
            <a href="{{ route('product.index') }}" class="btn-back" style="display: inline-block; margin-top: 20px;">← Quay lại danh sách</a>
        </div>
    </div>
</div>
@endsection
