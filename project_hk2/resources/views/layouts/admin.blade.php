<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Admin - @yield('title', 'Trang quản trị')</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Bootstrap JS  --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>

    {{-- App CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="bg-dark text-white py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <h3 class="mb-0">🔐 Admin Panel</h3>
            <nav>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('home') }}">🏠 Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('admin.dashboard') }}">📊 Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('admin.products.index') }}">📦 Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('admin.users.index') }}">👤 Người dùng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('admin.settings') }}">⚙️ Cài đặt</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-outline-light ms-2">🚪 Đăng xuất</button>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container py-4">
        @yield('content')
    </main>
</body>
</html>
