<!DOCTYPE html>
<html>
<head>
    <title>Bao cao hang ton kho</title>
</head>
<body>
    <h1>Bao cao hang ton kho</h1>
    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>Ten san pham</th>
                <th>So luong ton kho</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->quantity }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
