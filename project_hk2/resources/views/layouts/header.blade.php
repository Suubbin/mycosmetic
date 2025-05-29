<header>
    <div class="header-left" style="display:flex; align-items:center; gap: 15px;">
        <img src="{{ asset('image/logo.png') }}" class="logo-img" alt="Logo">
    </div>

    <div class="menu-toggle" onclick="toggleMenu()">☰</div>

    <nav class="header-center" id="navbar">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ route('new') }}">New</a>
        <a href="{{ url('sale') }}">Sale</a>
        <a href="{{ url('products') }}">Products</a>
        <a href="{{ url('about') }}">About Us</a>

        {{-- Link quản trị chỉ hiển thị với admin --}}
        @auth
            @if (Auth::user()->role === 'admin')
                <a href="{{ route('admin.dashboard') }}">📊 Quản trị</a>
            @endif
        @endauth

        @auth
            <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                   data-bs-toggle="dropdown" aria-expanded="false">
                   👤 Xin chào, {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="userDropdown">
                    <li><a class="dropdown-item" href="{{ route('user.account') }}">📄 Thông tin tài khoản</a></li>
                    <li><a class="dropdown-item" href="{{ route('user.orders') }}">🧾 Lịch sử đơn hàng</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                           🚪 Đăng xuất
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endauth
    </nav>

    <a href="{{ route('cart.view') }}" class="floating-cart">
        🛒 <span class="cart-count">{{ count(session('cart', [])) }}</span>
    </a>

    <a href="#" id="scrollTopBtn" title="Lên đầu trang">∧</a>
</header>

<script>
    function toggleMenu() {
        const menu = document.getElementById('navbar');
        menu.classList.toggle('show');
    }
</script>
