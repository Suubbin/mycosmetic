@extends('layouts.app')

@section('content')
@if(session('success'))
    <div class="alert alert-success text-center">
        {{ session('success') }}
    </div>
@endif

<div class="all-products">
    <h2>🧴 Tất Cả Sản Phẩm</h2>
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card h-100 ">
                    <img src="{{ asset('image/products/' . $product->image) }}" class="card-img-top" style="height: 200px; object-fit: contain;">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text"><strong>Thương hiệu:</strong> {{ $product->brand }}</p>
                        <p class="card-text"><strong>Giá:</strong> {{ number_format($product->price, 0, ',', '.') }}₫</p>
                        <p class="card-text"><small>Mã SP: {{ $product->id }}</small></p>
                        <form action="{{ route('cart.add', $product->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="name" value="{{ $product->name }}">
                            <input type="hidden" name="price" value="{{ $product->price }}">
                            <input type="hidden" name="image" value="{{ $product->image }}">
                            <input type="hidden" name="quantity" value="1">
                            <button type="submit" class="btn btn-sm btn-primary mt-2">🛒 Thêm vào giỏ</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @if ($products->hasPages())
    <div class="text-center mt-4">
        <ul class="pagination pagination-sm justify-content-center">
        {{-- Previous Page Link --}}
        @if ($products->onFirstPage())
            <li class="disabled"><span>&laquo;</span></li>
        @else
            <li><a href="{{ $products->previousPageUrl() }}" rel="prev">&laquo;</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
            @if ($page == $products->currentPage())
                <li class="active"><span>{{ $page }}</span></li>
            @else
                <li><a href="{{ $url }}">{{ $page }}</a></li>
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($products->hasMorePages())
            <li><a href="{{ $products->nextPageUrl() }}" rel="next">&raquo;</a></li>
        @else
            <li class="disabled"><span>&raquo;</span></li>
        @endif
        </ul>
    </div>
    @endif
</div>
@endsection
<!-- <button type="submit" class="add-to-cart">🛒 Thêm vào giỏ</button> -->
