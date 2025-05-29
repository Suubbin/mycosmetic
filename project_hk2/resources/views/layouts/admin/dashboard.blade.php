@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <h2 class="mb-4">📊 Trang Quản Trị Admin</h2>

    <div class="row">
        <div class="col-md-4">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h5 class="card-title">Sản phẩm</h5>
                    <p class="card-text">Xem, sửa hoặc thêm sản phẩm mới.</p>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-light">Quản lý sản phẩm</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mt-3 mt-md-0">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h5 class="card-title">Người dùng</h5>
                    <p class="card-text">Xem và quản lý tài khoản người dùng.</p>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-light">Quản lý người dùng</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mt-3 mt-md-0">
            <div class="card bg-warning text-dark">
                <div class="card-body">
                    <h5 class="card-title">Cài đặt</h5>
                    <p class="card-text">Tuỳ chỉnh hệ thống admin.</p>
                    <a href="{{ route('admin.settings') }}" class="btn btn-dark">Cài đặt</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
