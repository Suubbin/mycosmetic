@extends('layouts.admin')

@section('title', 'Thông tin người dùng')

@section('content')
<div class="container mt-4">
    <h2>👁️ Chi tiết người dùng</h2>

    <div class="card mt-3">
        <div class="card-body">
            <p><strong>ID:</strong> {{ $user->id }}</p>
            <p><strong>Tên:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Ngày tạo:</strong> {{ $user->created_at->format('d/m/Y H:i') }}</p>

           @if($user->province || $user->district || $user->ward)
    <p><strong>Địa chỉ giao hàng:</strong>
        {{ $user->ward ?? '' }}, {{ $user->district ?? '' }}, {{ $user->province ?? '' }}
    </p>
@else
    <p><em>Không có địa chỉ giao hàng</em></p>
@endif

        </div>
    </div>

    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary mt-3">⬅️ Quay lại danh sách</a>
</div>
@endsection
