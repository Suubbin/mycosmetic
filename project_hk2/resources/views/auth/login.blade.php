@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endpush

@section('content')
    <div class="login-container">
        <div class="login-card">
            <h2 class="login-title">Đăng nhập</h2>

            <!-- @if (session('message'))
                <div class="alert alert-warning d-flex align-items-center" role="alert">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    <div>{{ session('message') }}</div>
                </div>
            @endif -->

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <label>Email</label>
                <input type="email" name="email" required>

                <label>Mật khẩu</label>
                <input type="password" name="password" required>

                <button type="submit">Đăng nhập</button>

                <p class="register-link">Chưa có tài khoản? <a href="{{ route('register') }}">Đăng ký ngay</a></p>
            </form>
        </div>
    </div>
@endsection
