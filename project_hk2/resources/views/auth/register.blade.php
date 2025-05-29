@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endpush

@section('content')
    <div class="register-container">
        <div class = "register-card">
            <h2 class="register-title">Đăng ký tài khoản</h2>
            @if (session('warning'))
                <div class="alert alert-warning">
                    {{ session('warning') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('register') }}" method="POST">
                @csrf

                <!-- Họ tên -->
                <div>
                    <label for="name">Họ và tên</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" required>
                    @error('name')
                        <span style="color: red;">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Email -->
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                    @error('email')
                        <span style="color: red;">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Mật khẩu -->
                <div>
                    <label for="password">Mật khẩu</label>
                    <input type="password" name="password" id="password" required>
                    @error('password')
                        <span style="color: red;">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Xác nhận mật khẩu -->
                <div>
                    <label for="password_confirmation">Xác nhận mật khẩu</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required>
                </div>

                <!-- Nút đăng ký -->
                <button type="submit">Đăng ký</button>
            </form>

            <p style="margin-top: 15px; text-align: center;">
                Đã có tài khoản?
                <a href="{{ route('login') }}" style="color: #3b82f6;">Đăng nhập</a>
            </p>
        </div>
    </div>
@endsection
