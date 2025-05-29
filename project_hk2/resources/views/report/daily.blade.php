<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bao cao giao dich trong ngay</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f6f8;
            padding: 40px;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: auto;
        }
        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px 16px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .note {
            text-align: center;
            color: #555;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Bao cao ban/nhap san pham trong ngay</h2>
        <table>
            <thead>
                <tr>
                    <th>Ten san pham</th>
                    <th>So luong nhap</th>
                    <th>So luong ban</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($salesData as $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['imported'] }}</td>
                        <td>{{ $item['sold'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <p class="note">Chi tiet cac san pham da duoc giao dich trong ngay {{ \Carbon\Carbon::today()->format('d/m/Y') }}.</p>
    </div>
</body>
</html>

