<!DOCTYPE html>
<html>
<head>
    <title>Bao cao tuan</title>
</head>
<body>
    <h1>Bao cao tuan tu {{ now()->startOfWeek()->format('d/m/Y') }} đến {{ now()->endOfWeek()->format('d/m/Y') }}</h1>
    <p>Tong nhap: {{ $totalImport }}</p>
    <p>Tong ban: {{ $totalExport }}</p>
</body>
</html>
