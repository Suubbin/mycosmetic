@extends('layouts.admin')
@section('title', 'Cài đặt hệ thống')

@section('content')
<div class="container mt-4">
    <h2>⚙️ Cài đặt hệ thống</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.settings.update') }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="form-group mt-2">
            <label for="store_name">Tên cửa hàng</label>
            <input type="text" name="store_name" class="form-control"
                value="{{ $settings['store_name'] ?? '' }}">
        </div>

        <div class="form-group mt-2">
            <label for="contact_email">Email liên hệ</label>
            <input type="email" name="contact_email" class="form-control"
                value="{{ $settings['contact_email'] ?? '' }}">
        </div>

        <div class="form-group mt-2">
            <label for="contact_phone">Số điện thoại</label>
            <input type="text" name="contact_phone" class="form-control"
                value="{{ $settings['contact_phone'] ?? '' }}">
        </div>

        <div class="form-group mt-2">
            <label for="address">Địa chỉ</label>
            <textarea name="address" class="form-control">{{ $settings['address'] ?? '' }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Lưu cài đặt</button>
    </form>
</div>
@endsection
