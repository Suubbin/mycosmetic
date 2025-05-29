<!DOCTYPE html>
<html>
<head>
    <title>Bao cao quy</title>
</head>
<body>
    <h1>Bao cao quy tu {{ \Carbon\Carbon::now()->firstOfQuarter()->format('d/m/Y') }} den {{ \Carbon\Carbon::now()->lastOfQuarter()->format('d/m/Y') }}</h1>

    <p>Tong nhap: {{ $data['import'] ?? 0 }}</p>
    <p>Tong ban: {{ $data['sell'] ?? 0 }}</p>
</body>
</html>
