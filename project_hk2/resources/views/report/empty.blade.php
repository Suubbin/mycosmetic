<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thong bao bao cao</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .message-box {
            background-color: #fff;
            padding: 40px 60px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .message-box h2 {
            color: #333;
            font-size: 24px;
        }
        .message-box p {
            margin-top: 10px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="message-box">
        <h2>{{ $message }}</h2>
        <p>Vui long thu lai vao luc khac hoac kiem tra lai du lieu nhap.</p>
    </div>
</body>
</html>
