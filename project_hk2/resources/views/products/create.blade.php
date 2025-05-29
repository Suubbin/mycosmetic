@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Thêm sản phẩm mới</h2>

    {{-- Hiển thị lỗi --}}
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form thêm sản phẩm --}}
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="name">Tên sản phẩm:</label><br>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        </div><br>

        <div>
            <label for="price">Giá:</label><br>
            <input type="number" step="0.01" name="price" id="price" value="{{ old('price') }}" required>
        </div><br>

        <div>
            <label for="description">Mô tả:</label><br>
            <textarea name="description" id="description">{{ old('description') }}</textarea>
        </div><br>

        <div>
            <label for="image">Ảnh sản phẩm (jpeg/png/jpg):</label><br>
            <input type="file" name="image" id="image" required>
        </div><br>

        <button type="submit">Thêm sản phẩm</button>
    </form>
</div>
@endsection
