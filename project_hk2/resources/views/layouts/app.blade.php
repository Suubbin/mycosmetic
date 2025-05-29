<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosmetics Authentic</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    @stack('styles')
    @yield('scripts')

</head>

<body>

    {{-- Header --}}
    @include('layouts.header')

    {{-- Nội dung trang --}}
    <main style="padding: 20px;">
        @yield('content')
    </main>

    {{-- Footer (nếu cần) --}}
    @include('layouts.footer')

    <script>
        // Hàm đã có: hiển thị thời gian
        function updateTime() {
            const now = new Date();
            const timeStr = now.toLocaleString("vi-VN");
            document.getElementById("current-time").textContent = timeStr;
        }

        updateTime();
        setInterval(updateTime, 1000);

        // Hiện nút khi cuộn trang xuống hơn 200px
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            const btn = document.getElementById("scrollTopBtn");
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                btn.style.display = "block";
            } else {
                btn.style.display = "none";
            }
        }

        // Khi bấm nút, cuộn lên đầu trang mượt
        document.getElementById('scrollTopBtn').addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>

</body>

</html>
